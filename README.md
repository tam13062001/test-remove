# Start ứng dụng

Yêu cầu:

- Đã cài đặt docker

Làm theo các bước sau để start wordpress dev

Cài đặt biến môi trường, có thể sao chép file mẫu bằng lệnh sau: 
```text
cp .env.example .env
```

Start ứng dụng: 
```text
docker-compose up -d
```

Nếu bị lỗi không tìm thấy database thì cần phải tạo mới database đó:

```text

# List docker container
docker ps

CONTAINER ID   IMAGE                          COMMAND                  CREATED          STATUS          PORTS                  NAMES
01fdb7949bae   phpmyadmin/phpmyadmin:latest   "/docker-entrypoint.…"   6 minutes ago    Up 6 minutes    0.0.0.0:8001->80/tcp   wp-boilerplate-phpmyadmin-1
2c1717ee9e54   mysql:5.7                      "docker-entrypoint.s…"   7 minutes ago    Up 7 minutes    3306/tcp, 33060/tcp    wp-boilerplate-db-1
d8f8623b5a3e   wordpress:latest               "docker-entrypoint.s…"   10 minutes ago   Up 10 minutes   0.0.0.0:8000->80/tcp   wp-boilerplate-wordpress-1

```


## Resources

```text
Dashicons: https://developer.wordpress.org/resource/dashicons/#admin-generic
```

screenshot.png

size: 1200x900

## Build theme:

Mã nguồn được build bằng lệnh
```text
npm run build
```

Sau đó zip thư mục theme lại và cài đặt lên wordpress


## Structure

Cấu trúc của theme như gồm các thành phần như sau:
```text
theme
├── 404.php
├── assets
│   ├── icons
│   ├── images
│   │   ├── img.png
│   │   ├── img_1.png
│   │   └── logo.png
│   └── videos
├── build
│   ├── admin
│   │   ├── index.asset.php
│   │   └── index.js
│   ├── blocks
│   │   └── example
│   │       ├── block.json
│   │       ├── index.asset.php
│   │       ├── index.css
│   │       ├── index.css.map
│   │       ├── index.js
│   │       ├── index.js.map
│   │       └── render.php
│   └── public
│       ├── index.asset.php
│       ├── index.js
│       └── index.js.map
├── footer.php
├── functions.php
├── header.php
├── home.php
├── inc
│   ├── autoload.php
│   ├── classes
│   │   ├── AdminLoader.php
│   │   ├── BaseLoader.php
│   │   ├── Helper.php
│   │   ├── PortalLoader.php
│   │   ├── Registry.php
│   │   └── RocketTheme.php
│   └── helpers
│       ├── components.php
│       └── menu.php
├── index.php
├── page.php
├── screenshot.png
├── single.php
├── style.css
├── styles
│   └── style.css
├── template-parts
│   ├── content
│   │   ├── language-switcher.php
│   │   └── logo.php
│   ├── footer
│   │   └── menu.php
│   └── header
│       ├── header.php
│       └── menu.php
└── templates
    └── homepage.php
```

Trong đó:

## 1. Các tệp cốt lõi của theme
- `404.php`: Template cho trang lỗi 404.
- `footer.php`: Chứa phần footer.
- `functions.php`: Chứa các function quan trọng để tùy chỉnh theme.
- `header.php`: Chứa phần header.
- `home.php`: Template cho trang chủ.
- `index.php`: Template mặc định.
- `page.php`: Template cho các trang.
- `single.php`: Template cho bài viết đơn.
- `style.css`: File chứa thông tin theme và CSS chính.

## 2. Thư mục tài nguyên (`assets/`)
- `assets/icons/`: Chứa icon.
- `assets/images/`: Chứa hình ảnh như logo.
- `assets/videos/`: Chứa video.

## 3. Thư mục `build/`
Chứa các file biên dịch từ mã nguồn (JS/CSS).
- **`admin/`**: Chứa các file cho khu vực admin.
- **`blocks/`**: Chứa các block Gutenberg tùy chỉnh.
- **`public/`**: Chứa JavaScript chạy trên frontend.

## 4. Thư mục `inc/`
Chứa các function mở rộng:
- `classes/`: Các class PHP phục vụ theme.
- `helpers/`: Các helper function.

## 5. Thư mục `styles/`
Chứa file CSS chính của theme.

## 6. Thư mục `template-parts/`
Chia giao diện thành các phần nhỏ:
- `content/`: Gồm `language-switcher.php`, `logo.php`.
- `footer/`: Chứa `menu.php`.
- `header/`: Chứa `header.php`, `menu.php`.

## 7. Thư mục `templates/`
Chứa các template tùy chỉnh, như `homepage.php`.

## 8. Các tệp bổ sung
- `screenshot.png`: Hình ảnh preview của theme trong admin WordPress.


## HƯỚNG DẪN LẬP TRÌNH

### Viết trang
- Tạo mới template cho trang, ở templates/trang-cần-viết.php
- Tạo mới trang bằng wordpress pages, sau đó set template với giá trị là template vừa tạo

### Ghi chú css
- Dùng tailwindcss là chính
- Trong trường hợp cần custom, cấu hình file src/public/style.css

Các thông tin về class: 
- Đóng khung dữ liệu của trang web bằng class `container`
- Màu chủ đạo có giá trị là `primary`. Ví dụ: `text-primary`, `bg-primary`
- Màu chứ cấu có giá trị là `secondary`. Ví dụ: `text-secondary`, `bg-secondary`
- Bổ sung hình ảnh, video vào thư mục assets. Lưu ý: giảm kích thước xuống HD (720p)