#include "Shader.h"
#include <string>
#include <fstream>
#include <sstream>
#include <iostream>

Shader::Shader(const char* vertexPath, const char* fragmentPath)
{
    // 1. retrieve the vertex/fragment source code from filePath
    std::string vertexCode;
    std::string fragmentCode;
    std::ifstream vShaderFile;
    std::ifstream fShaderFile;
    // ensure ifstream objects can throw exceptions:
    vShaderFile.exceptions(std::ifstream::failbit | std::ifstream::badbit);
    fShaderFile.exceptions(std::ifstream::failbit | std::ifstream::badbit);
    try
    {
        // open files
        vShaderFile.open(vertexPath);
        fShaderFile.open(fragmentPath);
        std::stringstream vShaderStream, fShaderStream;
        // read file's buffer contents into streams
        vShaderStream << vShaderFile.rdbuf();
        fShaderStream << fShaderFile.rdbuf();
        // close file handlers
        vShaderFile.close();
        fShaderFile.close();
        // convert stream into string
        vertexCode = vShaderStream.str();
        fragmentCode = fShaderStream.str();
    }
    catch (std::ifstream::failure e)
    {
        std::cout << "ERROR::SHADER::FILE_NOT_SUCCESFULLY_READ" << std::endl;
    }
    const char* vertexShaderSource = vertexCode.c_str();
    const char* fragmentShaderSource = fragmentCode.c_str();

    int vertexShader = glCreateShader(GL_VERTEX_SHADER);//������ɫ������
    glShaderSource(vertexShader, 1, &vertexShaderSource, NULL);//��Դ��
    glCompileShader(vertexShader);//������ɫ������

    int fragmentShader = glCreateShader(GL_FRAGMENT_SHADER);//������ɫ������
    glShaderSource(fragmentShader, 1, &fragmentShaderSource, NULL);//��Դ��
    glCompileShader(fragmentShader);//������ɫ������

    ID = glCreateProgram();//��������
    glAttachShader(ID, vertexShader);//������ɫ������
    glAttachShader(ID, fragmentShader);//������ɫ������
    glLinkProgram(ID);//�������ɳ���
}

void Shader::useShader()
{
    glUseProgram(ID);
}

Shader::~Shader(void)
{
    glDeleteProgram(ID);
}
