#!/usr/bin/env python
import shutil
import os
import numpy as np
import cv2
import time
import sys


def rgb2ycbcr(im):
    cbcr = np.empty_like(im)
    r = im[:,:,0]
    g = im[:,:,1]
    b = im[:,:,2]
    # Y
    cbcr[:,:,0] = .299 * r + .587 * g + .114 * b
    # Cb
    cbcr[:,:,1] = 128 - .169 * r - .331 * g + .5 * b
    # Cr
    cbcr[:,:,2] = 128 + .5 * r - .419 * g - .081 * b
    return np.uint8(cbcr)

def euclian(a,b):
    euclid = np.sqrt((int(a[0])-int(b[0]))**2 + (int(a[1])-int(b[1]))**2 + (int(a[2])-int(b[2]))**2 )
    return euclid

def scale(img, scale_percent):
    width = int(img.shape[1] * scale_percent / 100)
    height = int(img.shape[0] * scale_percent / 100)
    dim = (width, height)
    return cv2.resize(img, dim, interpolation = cv2.INTER_AREA)



# mengambil argumen yg dikirimkan php
arguments = sys.argv[1:]
arr_row = arguments[0].split("/")
arr_point = []

for i in arr_row:
    rr = i.split(",")[0]
    gg = i.split(",")[1]
    bb = i.split(",")[2]
    arr_point.append([[[ int(rr), int(gg), int(bb)]]])


point1 = np.array(arr_point[0])
arr_point_9 = []
arr_point_9.append(np.array(arr_point[0]))
arr_point_9.append(np.array(arr_point[1]))
arr_point_9.append(np.array(arr_point[2]))
arr_point_9.append(np.array(arr_point[3]))
arr_point_9.append(np.array(arr_point[4]))
arr_point_9.append(np.array(arr_point[5]))
arr_point_9.append(np.array(arr_point[6]))
arr_point_9.append(np.array(arr_point[7]))
arr_point_9.append(np.array(arr_point[8]))



# jika jarak warna yang ditentukan dengan warna rata-rata setiap region kurang dari variabel batas_dist, maka sesuai syarat
batas_dist = 100
# karena region warna ada 9, jadi bisa memilih berapa batas region yg sesuai syarat
jum_syarat = 7




# mengambil gambar dari folder
file_path = "./public/images/"
source = os.listdir(file_path)
tresh  = 1000





# loop semua file didalam folder
for files in source:
    # hanya file format png, jpeg, jpg gambar yg dapat masuk
    if files.endswith(".png") or files.endswith(".jpeg") or files.endswith(".jpg"):

        real = file_path + files
        # perubahan gambar menjadi array
        img = cv2.imread(real)

        # mengambil lebar x panjang gambar
        jarak1 = img.shape[0]/3
        jarak2 = img.shape[1]/3

        eu = []


        count = 0
        # pengambilan region gambar lalu dihitung jarak dengan warna yg dipilih (input) menggunakan euclidean distance
        for i in range(3):
            for j in range(3):
                mean_r = img[0+(jarak1*i):jarak1+(jarak1*i), 0+(jarak2*j):jarak2+(jarak2*j), 0].mean()
                mean_g = img[0+(jarak1*i):jarak1+(jarak1*i), 0+(jarak2*j):jarak2+(jarak2*j), 1].mean()
                mean_b = img[0+(jarak1*i):jarak1+(jarak1*i), 0+(jarak2*j):jarak2+(jarak2*j), 2].mean()

                mean_all = np.array([[[mean_b,mean_g,mean_r]]])
                eucli = euclian(arr_point_9[count][0,0,:], mean_all[0,0,:])
                count = count + 1
                if eucli < batas_dist :
                    eu.append(1)
                else:
                    eu.append(0)

        if (i == 2 and j == 2 and eu.count(1) >= jum_syarat):
            print(files+"|")


cv2.destroyAllWindows()
