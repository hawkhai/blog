#encoding=utf8
import os, sys
import time

def readfile(fpath):
    with open(fpath, "rb") as fin:
        return fin.read()

def copyfile(fpath, tpath):
    fdata = readfile(fpath)
    ftarget = readfile(tpath)
    if fdata == ftarget:
        return False
    fout = open(tpath, "wb")
    fout.write(fdata)
    fout.close()
    return True

def fmain(fpath, tpath):

    if os.path.isdir(fpath):
        for _dir in os.listdir(fpath):
            _fpath = os.path.join(fpath, _dir)
            _tpath = os.path.join(tpath, _dir)
            fmain(_fpath, _tpath)
        return

    try:
        # time.sleep(0.001)
        if not os.path.exists(tpath):
            return
        if copyfile(fpath, tpath):
            print(fpath)
    except Exception, ex:
        print(ex, fpath)

while __name__ == "__main__":
    # CFLAGS_Release := -fpermissive
    # CFLAGS_Debug := -fpermissive
    # Build using: CXXFLAGS=-fpermissive make https://issues.adblockplus.org/ticket/4950
    fpath = r"E:\kSource\blog\source\gyp"
    tpath = r"C:\Ruby25-x64\lib\ruby\gems\2.5.0\gems\libv8-3.16.14.19\vendor\v8\out\tools\gyp"
    fmain(fpath, tpath)

    # localtime_s -> localtime_sx
    # #pragma comment( lib, "winmm.lib" )
    fpath = r"E:\kSource\blog\source\libv8-therubyracer\platform-win32.cc"
    tpath = r"C:\Ruby25-x64\lib\ruby\gems\2.5.0\gems\libv8-3.16.14.19\vendor\v8\src\platform-win32.cc"
    fmain(fpath, tpath)

    # remove command line option '-rdynamic'
    # LIBS => -lwinmm
    fpath = r"E:\kSource\blog\source\libv8-therubyracer\Makefile"
    tpath = r"C:\Ruby25-x64\lib\ruby\gems\2.5.0\gems\therubyracer-0.12.3\ext\v8\Makefile"
    fmain(fpath, tpath)

    # Accessor access(get, set, data); -> Accessor accessor(get, set, data);
    fpath = r"E:\kSource\blog\source\libv8-therubyracer\object.cc"
    tpath = r"C:\Ruby25-x64\lib\ruby\gems\2.5.0\gems\therubyracer-0.12.3\ext\v8\object.cc"
    fmain(fpath, tpath)
