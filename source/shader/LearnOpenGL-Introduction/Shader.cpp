#include "Shader.h"


Shader::Shader(void)
{
	const char* vertexShaderSource = "#version 400 core\n"
		"layout(location=0) in vec3 aPos;\n"
		"layout(location=1) in vec2 aTexCoord;\n"
		"out vec2 TexCoord;\n"
		"uniform mat4 transform;\n"
		"void main()\n"
		"{\n"
		"gl_Position=transform*vec4(aPos.x,aPos.y,aPos.z,1.0f);\n"
		"TexCoord=aTexCoord;\n"
		"}\n\0";

	const char* fragmentShaderSource = "#version 400 core\n"
		"out vec4 FragColor;\n"
		"in vec2 TexCoord;\n"
		"uniform sampler2D ourTexture1;\n"
		"uniform sampler2D ourTexture2;\n"
		"void main()\n"
		"{\n"
		"FragColor = mix(texture(ourTexture1, TexCoord), texture(ourTexture2, TexCoord), 0.2);\n"
		"}\n\0";

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
