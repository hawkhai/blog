#include "stdafx.h"
#include <math.h>
#include "LearnGL.h"
#include "glad/glad.h"
#include "GLFW/glfw3.h"

#pragma comment(lib, "glfw3.lib") 

#define GLSL(src) "#version 400 core\n" #src "\n\0"

int g_vertexShaderId = 0;
int g_fragShaderId = 0;
int g_shaderProgId = 0;
int g_uColorLocation = 0;

void setVertexEnv();
void createVertexShader();
void createFragShader();
void createShaderProg();
void drawContent();

int learnOpenGL() {

    // ��ʼ��
    glfwInit();
    glfwWindowHint(GLFW_CONTEXT_VERSION_MAJOR, 4);
    glfwWindowHint(GLFW_CONTEXT_VERSION_MINOR, 0);

    glfwWindowHint(GLFW_OPENGL_PROFILE, GLFW_OPENGL_CORE_PROFILE);

    GLFWwindow* window = glfwCreateWindow(400, 300, "OpenGL", NULL, NULL);
    if (!window) {
        glfwTerminate();
        return -1;
    }

    glfwMakeContextCurrent(window);
    if (!gladLoadGLLoader((GLADloadproc)glfwGetProcAddress)) {
        glfwTerminate();
        return -1;
    }

    setVertexEnv();
    createVertexShader();
    createFragShader();
    createShaderProg();

    glPolygonMode(GL_FRONT_AND_BACK, GL_LINE); // GL_FILL

    // ��Ⱦ����
    while (!glfwWindowShouldClose(window)) {

        glClearColor(0.2f, 0.3f, 0.3f, 1.0f);
        glClear(GL_COLOR_BUFFER_BIT);

        drawContent();

        glfwPollEvents();
        glfwSwapBuffers(window);
    }

    // �˳�
    glfwTerminate();
    return 0;
}

// ������ɫ��
void createVertexShader() {

    const char* vertexShaderSource = GLSL(
        layout(location = 0) in vec3 aPos;
    out vec4 vertexsColor;
    void main() {
        vertexsColor = vec4(0.0f, 1.0f, 0.0f, 1.0f);
        gl_Position = vec4(aPos.x, aPos.y, aPos.z, 1.0f);
    }
    );

    g_vertexShaderId = glCreateShader(GL_VERTEX_SHADER);
    glShaderSource(g_vertexShaderId, 1, &vertexShaderSource, NULL);
    glCompileShader(g_vertexShaderId);
}

// Ƭ����ɫ��
void createFragShader() {
    // ����ɫ��Դ������ַ���
    const char* fragShaderSource = GLSL(
        out vec4 FragColor;
    in vec4 vertexsColor;
    uniform vec4 ourColor;
    void main() {
        FragColor = ourColor; // vertexsColor
    }
    );

    // ������ɫ������
    g_fragShaderId = glCreateShader(GL_FRAGMENT_SHADER);
    // ��Դ���ַ���������ɫ������
    glShaderSource(g_fragShaderId, 1, &fragShaderSource, NULL);
    // ������ɫ��
    glCompileShader(g_fragShaderId);
}

void setVertexEnv() {
    float vertices[] = {
        -0.5f, -0.5f, 0.0f, // left, down
        0.5f, -0.5f, 0.0f, // right, down
        -0.5f, 0.5f, 0.0f, // left, top
        0.5f, 0.5f, 0.0f, // right, top
    };
    unsigned int indices[] = {
        0, 1, 2,
        1, 2, 3,
    };

    unsigned int VAO; // VAO: vertex array object
    unsigned int VBO; // VBO: vertex buffer object
    unsigned int EBO;

    glGenVertexArrays(1, &VAO);
    glGenBuffers(1, &VBO);
    glGenBuffers(1, &EBO);

    // �󶨵�ǰ������
    glBindVertexArray(VAO);
    glBindBuffer(GL_ARRAY_BUFFER, VBO);
    glBindBuffer(GL_ELEMENT_ARRAY_BUFFER, EBO);

    // ���Կ�дֵ�������Դ�ռ䡣
    glBufferData(GL_ARRAY_BUFFER, sizeof(vertices), vertices, GL_STATIC_DRAW);
    glBufferData(GL_ELEMENT_ARRAY_BUFFER, sizeof(indices), indices, GL_STATIC_DRAW);

    // �����Կ���ֵ�Ľṹ��
    glVertexAttribPointer(0, 3, GL_FLOAT, GL_FALSE, 3 * sizeof(float), (void*)0);
    glEnableVertexAttribArray(0);
}

void createShaderProg() {
    // ������ɫ���������
    g_shaderProgId = glCreateProgram();
    // ������õ���ɫ�����ӵ����������
    glAttachShader(g_shaderProgId, g_vertexShaderId);
    glAttachShader(g_shaderProgId, g_fragShaderId);
    // �������ɳ���
    glLinkProgram(g_shaderProgId);

    g_uColorLocation = glGetUniformLocation(g_shaderProgId, "ourColor");
}

void drawContent() {

    glUseProgram(g_shaderProgId); // ʹ�ó���

    // in out�� GPU & GPU ���ݴ���
    // ȫ�� CPU �� GPU ������ uniform
    float xtime = glfwGetTime();
    glUniform4f(g_uColorLocation, 0.0f, 0.0f, sin(xtime), 1.0);

    //glDrawArrays(GL_TRIANGLES, 0, 6); // ������
    glDrawElements(GL_TRIANGLES, 6, GL_UNSIGNED_INT, 0);
}
