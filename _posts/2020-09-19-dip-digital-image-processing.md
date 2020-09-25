---
layout: post
title: "“数字图像处理”笔记 -- 基础知识 Digital Image Processing (DIP)"
location: "珠海"
categories: ["图像处理"]
tags: [图像处理]
mathjax: true
toc: true
mermaid: true
---


## 数字图像处理概述

数字图像处理 - Digital Image Processing (DIP)


### 图像和图形区别

* 图形是指令的集合，比如 `Point1.LineTo(Point2)`。
* 图像是一个数值矩阵。


### 索引图像 vs 真色彩图像

* 索引图像，有颜色表调色板索引。矩阵存储的是索引号。
* 真色彩图像，矩阵直接存储色彩像素信息。

> **UltraEdit** 软件。基本的编辑文本、十六进制、ASCII 码、语法加亮、代码折叠、代码单词拼写检查等。


## 几何变换


### 齐次坐标

齐次坐标就是将一个原本是 $n$ 维的向量用一个 $n+1$ 维向量来表示，是指一个用于投影几何里的坐标系统。

$$
\left[\begin{array}{l}
x^{\prime} \\
y^{\prime} \\
1
\end{array}\right]
=
\left[\begin{array}{lll}
1 & 0 & \Delta x \\
0 & 1 & \Delta y \\
0 & 0 & 1
\end{array}\right]
\left[\begin{array}{l}
x \\
y \\
1
\end{array}\right]
=
\left[\begin{array}{c}
x+\Delta x \\
y+\Delta y \\
1
\end{array}\right]
\tag{ 平移 }
$$

$$
T=\left[\begin{array}{cccc}
1 & 0 & \Delta x \\
0 & 1 & \Delta y \\
0 & 0 & 1
\end{array}\right]
\tag{ 平移 }
$$

$$
S=\left[\begin{array}{cccc}
S_{x} & 0 & 0 \\
0 & S_{y} & 0 \\
0 & 0 & 1
\end{array}\right]
\tag{ 缩放 }
$$

$$
R=\left[\begin{array}{cccc}
\cos \gamma & \sin \gamma & 0 \\
-\sin \gamma & \cos \gamma & 0 \\
0 & 0 & 1
\end{array}\right]
\tag{ 旋转 }
$$

$$
H
=
\left[\begin{array}{ccc}
-1 & 0 & f \text {Width} \\
0 & 1 & 0 \\
0 & 0 & 1
\end{array}\right]
\tag{ 水平镜像 }
$$

$$
V
=
\left[\begin{array}{ccc}
1 & 0 & 0 \\
0 & -1 & f \text {Height} \\
0 & 0 & 1
\end{array}\right]
\tag{ 垂直镜像 }
$$

$$
Z
=
\left[\begin{array}{ccc}
0 & 1 & 0 \\
1 & 0 & 0 \\
0 & 0 & 1
\end{array}\right]
\tag{ 转置 }
$$

PPT: <https://wenku.baidu.com/view/1bdcc12227c52cc58bd63186bceb19e8b8f6ecbc.html>

资料：空间变换网络（STN）原理 + 2D 图像空间变换 + 齐次坐标系讲解。<sup>[疑似转载](https://www.cnblogs.com/think90/p/11556725.html)</sup>
<sup>[**貌似原版**](https://blog.csdn.net/Rosemary_tu/article/details/84069878)</sup>


### 仿射变换 & 透视变换

扩展到三维，也是成立的。

$$
\left[\begin{array}{l}
x^{\prime} \\
y^{\prime} \\
z^{\prime} \\
1
\end{array}\right]
=
\left[\begin{array}{llll}
1 & 0 & 0 & \Delta x \\
0 & 1 & 0 & \Delta y \\
0 & 0 & 1 & \Delta z \\
0 & 0 & 0 & 1
\end{array}\right]
\left[\begin{array}{l}
x \\
y \\
z \\
1
\end{array}\right]
=
\left[\begin{array}{c}
x+\Delta x \\
y+\Delta y \\
z+\Delta z \\
1
\end{array}\right]
$$

[^_^]: {z% include image.html url="/images/digital-image-processing/20190104135139626.png" noshadow=1 %}
[^_^]: {z% include image.html url="/images/digital-image-processing/20190104135201258.png" noshadow=1 %}
[^_^]: {z% include image.html url="/images/digital-image-processing/20190104135229160.png" noshadow=1 %}
[^_^]: {z% include image.html url="/images/digital-image-processing/20190104135246701.png" noshadow=1 %}


## 图像增强 & 灰度变化

点运算：$$g(x, y) = T[f(x, y)]$$


## 图像平滑处理

领域处理方法，空域卷积滤波。

中值滤波法。中值滤波法是一种非线性平滑技术，它将每一像素点的灰度值设置为该点某邻域窗口内的所有像素点灰度值的中值。


##  图像锐化

微分运算，梯度锐化，边缘检测。

$$
\nabla f(x, y)=\left[G_{x}, G_{y}\right]^{T}=\left[\frac{\partial f}{\partial x}, \frac{\partial f}{\partial y}\right]^{T}
$$

这个矢量的幅度为：

$$\operatorname{mag}(\nabla f)=g(x, y)=\sqrt{\frac{\partial^{2} f}{\partial x^{2}}+\frac{\partial^{2} f}{\partial y^{2}}}$$

方向角为：

$$\phi(x, y)=\arctan \left|\frac{\partial f}{\partial y} / \frac{\partial f}{\partial x}\right|$$

数字图像中，更多的使用差分来近似导数，最简单的梯度近似表达式如下：

$$\begin{array}{l}
G_{x}=f(x, y)-f(x-1, y) \\
G_{y}=f(x, y)-f(x, y-1)
\end{array}$$


### 拉普拉斯算子

二阶微分，拉普拉斯算子。

$$\begin{array}{l}
\nabla^2 f=\frac{\partial^{2} f}{\partial x^{2}}+\frac{\partial^{2} f}{\partial y^{2}} \\
\frac{\partial^{2} f}{\partial x^{2}}=f(x+1)+f(x-1)-2 f(x) \\
\frac{\partial^{2} f}{\partial y^{2}}=f(y+1)+f(y-1)-2 f(y) \\
\end{array}$$

$$
\nabla^2 f=[f(x+1,y)+f(x-1,y)+f(x,y+1)+f(x,y-1)]-4f(x,y)\tag{ 两个分向量相加 }
$$

原始图像和拉普拉斯图像叠加，可以边缘加强。

$$
g(x)=
\begin{cases}
f(x, y)-\nabla^{2} f(x, y) & \text{ 中心系数为负 } \\
f(x, y)+\nabla^{2} f(x, y) & \text{ 中心系数为正 }
\end{cases}
$$

边缘检测，LOG 算子（高斯-拉普拉斯算子 / Laplacian of Gaussian, LoG）中心点的距离与位置加权系数的关系：

{% include image.html url="/images/digital-image-processing/bki-20131208210655-949753613.png" noshadow=1
url2="/images/digital-image-processing/logx.png" %}
{% include image.html url="/images/digital-image-processing/v2-f824bd5eae07235ebf531fa0b546ba98_720w.jpg" noshadow=1 %}

推演过程。高斯二阶导如下图的绿色线，蓝色线是高斯一阶导数，红色则是高斯函数。

{% include image.html url="/images/digital-image-processing/20170315204708636.png" noshadow=1 %}


### 高频提升滤波器

$$
g(x,y)=af(x,y)\pm \nabla f(x,y)
$$


## 边缘检测

$$\begin{array}{|c|c|c|}
\hline Z_{1} & Z_{2} & Z_{3} \\
\hline Z_{4} & Z_{5} & Z_{6} \\
\hline Z_{7} & Z_{8} & Z_{9} \\
\hline
\end{array}
$$


### Roberts 边缘检测算子

$$\nabla f \approx\left|z_{9}-z_{5}\right|+\left|z_{8}-z_{6}\right|
\tag{Robert 交叉微分算子 }
$$


### Sobel 边缘检测算子

$$\begin{array}{l}
G_{x}=\left(Z_{7}+2 Z_{8}+Z_{9}\right)-\left(Z_{1}+2 Z_{2}+Z_{3}\right) \\
G_{y}=\left(Z_{3}+2 Z_{6}+Z_{9}\right)-\left(Z_{1}+2 Z_{4}+Z_{7}\right)
\end{array}$$


### Prewitt 边缘检测算子

$$\begin{array}{l}
G_{x}=\left(Z_{7}+Z_{8}+Z_{9}\right)-\left(Z_{1}+Z_{2}+Z_{3}\right) \\
G_{y}=\left(Z_{3}+Z_{6}+Z_{9}\right)-\left(Z_{1}+Z_{4}+Z_{7}\right)
\end{array}$$


### Krisch 边缘检测算子

图像中的每个点都用 8 个掩模进行卷积，取八个方向的最大值作为边缘幅值的输出。掩模序号对应边缘方向的编码。卷积的结果进行比较时，比较这个八个数的绝对值，因为，这个代表的是梯度，正负号只是方向。

{% include image.html url="/images/digital-image-processing/kirsch.jpg" %}


### LoG_Laplacian 高斯-拉普拉斯算子

$$\left[\begin{array}{ccccc}
-2 & -4 & -4 & -4 & -2 \\
-4 & 0 & 8 & 0 & -4 \\
-4 & 8 & 24 * & 8 & -4 \\
-4 & 0 & 8 & 0 & -4 \\
-2 & -4 & -4 & -4 & -2
\end{array}\right]$$


## 图像分割

<div class="mermaid">
graph LR
    A[图像] --> B[图像预处理]
    B --> | 图像分割 |C[图像识别]
    C --> D[图像理解]
classDef orange fill:#f96;
class E orange;
</div>


### 迭代法求取阈值进行图像分割

图像分割后的两部分 A 和 B 的均值和基本保持稳定。也就是说，随着迭代的进行，取 $$[mean(A)+mean(B)]/2$$ 最终的收敛值作为分割阈值。


## 轮廓提取


### 轮廓提取法

对于二值图像的轮廓提取，我们可以采用掏空内部点法，如果原图中有一点为黑，且它的 8 个相邻的点都为黑，则将该点删除。对于非二值图像，要先进行二值处理。


### 边界跟踪法

从图像的某个边界点出发，然后按照某种策略，搜索下一个边界点。直到搜索点与初始点重合，即找到轮廓。


### 区域增长法

依次用图像的每一个像素的灰度值和种子点相减，判断结果是否小于标准差，如果小于则将该点和种子点合并，不是则保持像素点的灰度值不变。这样处理后的图像就用区域分割法处理后的边缘分割图像

三个要点：

* 选择合适的种子点
* 确定相似性条件
* 确定停止生长的条件


### 区域分裂合并法

利用金字塔或者四叉树数据结构的层次概念，将图像划分成一组任意不相交的初始区域，即从金字塔或者四叉树结构的任意中间层开始，根据给定的均匀性检测准则进行分裂和合并这些区域。逐步改善区域划分性能，直到最后将图像分成数量最少的均匀区域为之。

如何确定区域的相似性呢？基于区域的灰度值，或者基于区域边界的强弱项。简单的方法就下比较他们的灰度均值。


## 图形分割

图像的面积与周长计算，二值化图像区域标记。<https://www.cnblogs.com/-wenli/p/11722469.html>

灰度转换算法 <https://www.cnblogs.com/-wenli/p/11562327.html>


## 图像的测量之投影与纹理

<https://blog.csdn.net/qq_43409114/article/details/104714828>

[课件](https://www.cnblogs.com/-wenli/p/11729342.html)


### 衡量直方图间的相似性

直方图的均值，直方图的方差。直方图统计了相同像素的个数。

* 直方图的均值：（该区域每一个像素 * 该像素的个数）/ 该区域像素点个数
* 直方图的方差：（该区域每一个像素 - 均值）^ 2 * 该像素的个数）/ 该区域像素点个数

设 $h_1(z)$ 和 $h_2(z)$ 为两个区域的灰度直方图。

$$m_{1}=\frac{\sum z h_{1}(z)}{\sum h_{1}(z)} \quad \sigma_{1}^{2}=\frac{\sum\left(z-m_{1}\right)^{2} h_{1}(z)}{\sum h_{1}(z)}$$

$$m_{2}=\frac{\sum z h_{2}(z)}{\sum h_{2}(z)} \quad \sigma_{2}^{2}=\frac{\sum\left(z-m_{2}\right)^{2} h_{2}(z)}{\sum h_{2}(z)}$$


### other

[link](https://www.cnblogs.com/darkknightzh/p/5147982.html)
对于两直方图 $$S=\left\{ {s_{1}},\cdots {s_{n}} \right\}$$ 及 $$M=\left\{ {m_{1}},\cdots {m_{n}} \right\}$$，$n$ 为直方图维数（如 255），这两直方图之间的卡方相似性为：

$$
\chi_ \omega ^{2}(S,M)=
\sum\limits_{i=1}^{n}{ { \omega _{i}}\frac{ { {\left( {s_{i}}-{m_{i}} \right)}^{2}}}{ { s_{i}}+{m_{i}}}}
$$

其中，$${\omega _{i}}$$ 为权重，可令不同维度权重取不同值。

**直方图欧氏距离的相似性度量**为：

$$
D(S,M)={ { \left( \sum\limits_{i=1}^{n}{ { {\left( {s_{i}}-{m_{i}} \right)}^{2}}} \right)}^{2}}
$$

其中，$$0 \le {s_{i}}\le 1$$ 和 $$0 \le {m_{i}}\le 1$$ 为归一化值（此处外部是平方还是 0.5 次方不确定）。

归一化处理后，图像直方图的相似度的度量为：

$$
D(S,M)=\frac{1}{n}\sum\limits_{i=1}^{n}{\left( 1-\frac{\left| { { s}_{i}}-{m_{i}} \right|}{\max ({ { s}_{i}},{m_{i}})} \right)}
$$

直方图相似性常用于人脸检测。


### Kolmogorov-Smirnov 检测法

对于两幅图像，分别求出其累计直方图，然后取其累计直方图差值的最大值。

$$\begin{array}{c}
H(z)=\int_{0}^{z} h(x) d x \\
K S=\max_z \left|H_{1}(z)-H_{2}(z)\right|
\end{array}$$

然后再求出直方图之间差值的的和值，为 $SD$：

$$S D=\sum_z \left|h_{1}(z)-h_{2}(z)\right|$$

如果 $$\vert KS−SD\vert$$ 在阈值之内，则相似。

{% highlight python %}
def Texture_2(img1, img2):
    # 下面是用来求一副图像的直方图
    def getStatic(img):
        static = np.zeros(shape=256, dtype=int)
        for y in range(0, len(img)):
            for x in range(0, len(img[y])):
                c = img[y, x, 0]
                static[c] = static[c] + 1
        return static

    # 下面的函数是用来求一副图像的累计直方图
    def getStatic1(img):
        static = np.zeros(shape=256, dtype=int)
        for y in range(0, len(img)):
            for x in range(0, len(img[y])):
                c = img[y, x, 0]
                static[c] = static[c] + 1
                if c > 0:
                    static[c] = static[c] + static[c-1]
        return static
    static1 = getStatic(img1)
    static2 = getStatic(img2)
    # 用来参数 KS
    KS = np.max(static1 - static2)
    # 用来求参数 SD
    SD = np.sum((getStatic(img1) - getStatic(img2)), axis=0)
    return np.abs(KS - SD)

{% endhighlight %}


### 图像自相关函数分析法

$$p(x, y)=\frac{\sum_{i=0}^{N-1} \sum_{j=0}^{N-1} f(i, j) f(i+x, j+y)}{\sum_{i=0}^{N-1} \sum_{j=0}^{N-1} f(i, j)}$$

$$d=\left(x^{2}+y^{2}\right)^{\frac{1}{2}}$$


### 灰度共生矩阵特征分析法

为从灰度为 $i$ 的像素点出发，离开某个固定位置 $\sigma=(dx,dy)$ 的另一个像素点的同时发生的灰度为 $j$，定义这两个灰度在整个图像中发生的概率（或者频率）。

完全看不懂了。


### 灰度-梯度共生矩阵分析法


## 形态学

形态学的基本操作包括腐蚀、膨胀、开操作、闭操作。

简单来说，以 B 结构中心点为准心，在 A 中找能满足 B 结构的点即为腐蚀。
把 A 结构的每个点放到 B 中心点，以 B 结构外扩即为膨胀。
开操作表示先腐蚀后膨胀；闭操作表示先膨胀后腐蚀。

闭运算，弥合，毛刺保留；开运算，分裂，毛刺去掉。


## toP37


## 参考

- [1] [bilibili](https://www.bilibili.com/video/BV1tx41147Tx?from=search&seid=2305003300792844801)
- [2] [标题自动编号](https://www.cnblogs.com/36bian/p/7609304.html)
- [3] [目录](https://www.cnblogs.com/-wenli/p/11744405.html)