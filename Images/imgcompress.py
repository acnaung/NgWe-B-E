from PIL import Image

def compress_image(input_image_path, output_image_path):
    with Image.open(input_image_path) as img:
        img.save(output_image_path, quality=95, optimize=True)

compress_image('input.jpg', 'output.jpg')
