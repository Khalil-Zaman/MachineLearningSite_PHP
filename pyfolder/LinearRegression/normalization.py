#!/Users/Home/AppData/Local/Programs/Python/Python36-32/python
# -*- coding: UTF-8 -*-

# enable debugging
import cgitb
cgitb.enable()
print ("Content-Type: text/html\n")


import cgi
import numpy as np
from functions import error_function, normalize

form = cgi.FieldStorage()
w = form["W"].value
X = form["X"].value
y = form["Y"].value


# INPUT DATA
#X = np.array([0, 1, 2, 3, 4, 5])
X = X.split(",")
X = [float(number) for number in X]
X = np.asarray(X)
# OUTPUT DATA
#y = np.array([4, 7, 10, 13, 16, 19])
y = y.split(",")
y = [float(number) for number in y]
y = np.asarray(y)

# WEIGHTS
w = w.split(",")
w = [float(number) for number in w]
w = np.asarray(w)

# Add bias term
bias = np.ones(X.shape[0])
X = np.array([bias, X])
X = X.transpose()


# Compute w = (Xt.X)-1
w = normalize(X, y)

f_values = np.dot(X,w)
print(f_values[0], ",", f_values[len(f_values)-1],":")
print (w[0],",", w[1],":")
print(error_function(y, f_values), ":")
