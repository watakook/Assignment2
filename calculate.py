#!/usr/bin/env python3

import sys

# Check for correct number of arguments
if len(sys.argv) != 4:
    print("Error: Please provide exactly 3 numeric arguments (a, b, c)")
    sys.exit()

try:
    # Convert arguments to floats
    a = float(sys.argv[1])
    b = float(sys.argv[2])
    c = float(sys.argv[3])

    # Calculations
    c_cubed = c ** 3
    sqrt_c_cubed = c_cubed ** 0.5
    division = sqrt_c_cubed / a
    multiplication = division * 10
    result = b + multiplication

    # Output (plain text line by line)
    print(f"{a}")                      # line 0
    print(f"{b}")                      # line 1
    print(f"{c}")                      # line 2
    print(f"{c_cubed}")                # line 3
    print(f"{sqrt_c_cubed}")           # line 4
    print(f"{division}")               # line 5
    print(f"{multiplication}")         # line 6
    print(f"{result}")                 # line 7

except Exception as e:
    print(f"Error: {e}")
