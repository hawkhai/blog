---
layout: post
title: "Irrlicht 3D 笔记 -- OpenGL ES 2.x Driver 源码剖析 2D 部分"
author:
location: "珠海"
categories: ["Irrlicht"]
tags: ["Irrlicht"]
toc: true
toclistyle: none
comments:
visibility:
mathjax: true
mermaid: truez
glslcanvas:
codeprint:
cluster: "Irrlicht OpenGL-ES2 Driver"
---


## COGLES2Renderer2D.vsh

```glsl
/* Attributes */

attribute vec4 inVertexPosition; // 顶点坐标
attribute vec4 inVertexColor; // 顶点颜色，采用 bgra 存储。
attribute vec2 inTexCoord0; // 纹理坐标。

/* Uniforms */

uniform float uThickness; // 线条粗细。

/* Varyings */

varying vec2 vTextureCoord;
varying vec4 vVertexColor;

void main()
{
    gl_Position = inVertexPosition;
    gl_PointSize = uThickness;
    vTextureCoord = inTexCoord0;
    vVertexColor = inVertexColor.bgra;
}
```


## COGLES2Renderer2D.fsh

```glsl
precision mediump float;

/* Uniforms */

uniform int uTextureUsage; // 是否采用纹理。
uniform sampler2D uTextureUnit; // 纹理单元。

/* Varyings */

varying vec2 vTextureCoord;
varying vec4 vVertexColor;

void main()
{
    vec4 Color = vVertexColor;

    if (bool(uTextureUsage)) // 如果采用纹理，就把纹理 乘上去。
        Color *= texture2D(uTextureUnit, vTextureCoord);

    gl_FragColor = Color;
}
```


## COGLES2Renderer2D_noTex.fsh

```glsl
precision mediump float;

/* Varyings */
varying vec4 vVertexColor;

void main()
{
    gl_FragColor = vVertexColor;
}
```