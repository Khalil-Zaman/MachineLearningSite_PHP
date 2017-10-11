import numpy as np
import cgi

form = cgi.FieldStorage()
print (form["X"])

def descent(X, y, w, alpha):
    # Compute f(x)
    f = np.dot(X, w)

    # Calculate error function
    E = 0.5 * np.sum(np.square((y - f)))

    # Compute gradient descent
    w = w - alpha * np.dot(-X.transpose(), (y - f))
    return w


def cycle(input_data, output_data, min_delta = 0, max_iteration = 0, alpha=0.05):
    X = input_data
    y = output_data

    # WEIGHTS
    w = np.array([1, 1])
    old_w = np.array([0, 0])

    # Append bias term to input data
    bias = np.ones(X.shape[0])
    X = np.array([bias, X])
    X = X.transpose()

    if min_delta == 0:
        min_delta = 1/(10**10)

    if max_iteration != 0:
        for i in range(0, max_iteration):
            old_w = w
            w = descent(X, y, w, alpha)
            print(w)
            if np.linalg.norm((old_w - w)) <= min_delta:
                break
    else:
        while np.linalg.norm((old_w - w)) > min_delta:
            old_w = w
            w = descent(X, y, w, alpha)
            print(w)



# INPUT DATA
X = np.array([0, 1, 2, 3, 4, 5, 6, 7, 8])

# OUTPUT DATA
y = np.array([4, 7, 10, 13, 16, 19, 22, 25, 28])


#cycle(X, y, min_delta=0, max_iteration=500, alpha=0.005)
