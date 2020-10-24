#encoding=utf8
import os, re, sys
import cv2
import numpy as np
import matplotlib.pyplot as plt
from lib import kalgorithm

def maskfill(watermark, imgsrc):
    Ht, Wt = watermark.shape
    H, W, C = imgsrc.shape
    # 正反插值填充
    for y in range(Ht):
        for x in range(Wt):
            if watermark[y, x] >= 240 and y-1>=0 and x-1>=0:
                imgsrc[y, x] = ((imgsrc[y-1, x].astype(np.float32) +
                                 imgsrc[y, x-1].astype(np.float32) +
                                 imgsrc[y-1, x-1].astype(np.float32))/3).astype(np.uint8)
                watermark[y, x] = 0
    # 正反插值填充
    for iy in range(Ht):
        for ix in range(Wt):
            y = Ht - 1 - iy
            x = Wt - 1 - ix
            if watermark[y, x] >= 240 and y+1<Ht and x+1<Wt:
                imgsrc[y, x] = ((imgsrc[y+1, x].astype(np.float32) +
                                 imgsrc[y, x+1].astype(np.float32) +
                                 imgsrc[y+1, x+1].astype(np.float32))/3).astype(np.uint8)
                watermark[y, x] = 0

# 先二值化，找到水印位置，然后根据位置，用最近邻算法填充。
def mainfix(imgsrc, outputfile, threshold=250):

    imggray = kalgorithm.bgr2gray(imgsrc).astype(np.uint8)
    imggray = kalgorithm.thresholdBinarization(imggray, threshold)
    kalgorithm.imgShow(imggray)

    # 根据 mask 对原图进行临近填充
    maskfill(imggray, imgsrc)
    kalgorithm.imgSave(outputfile, imgsrc)

def mainfixPath(broken2file, outputfile, threshold=200):
    imgsrc = kalgorithm.imgRead(broken2file)
    mainfix(imgsrc, outputfile, threshold)

#
# phase2
# 任务:
# 破损修复
#
def main():
    broken2file = "./input_images/phase2/phase2_broken.jpg"
    outputfile = "./output_images/phase2/phase2_broken_repair.jpg"
    mainfixPath(broken2file, outputfile)

if __name__ == "__main__":
    main()