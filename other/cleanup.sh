#!/bin/bash

# Define directories to move files to
src_dir="./src"        # Directory for all PHP files (now "src")
image_dir="./images"  # Directory for all image files
svg_dir="./images/svg"  # Directory for SVG images (inside images)
other_dir="./other"  # Directory for other files (non-php, non-image)

# Create directories if they don't exist
mkdir -p "$src_dir" "$image_dir" "$svg_dir" "$other_dir"

# Enable extended globbing
shopt -s extglob

# Move PHP files (now to src)
mv ./*.php "$src_dir/"

# Move image files (excluding SVGs)
mv ./*.@(png|jpg|jpeg|gif|bmp) "$image_dir/"

# Move SVG files
mv ./*.svg "$svg_dir/"

# Move other files
mv ./*.*(sh|css|json) "$other_dir/"

# Move cgIcons and icons directories
mv cgIcons "$other_dir/"
mv icons "$other_dir/"

# Move the vendor directory
mv vendor "$other_dir/"
