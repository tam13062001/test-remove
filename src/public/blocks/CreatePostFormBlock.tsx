import React, { useState } from 'react';
import axios from 'axios';

export default function CreatePostForm() {
  const [title, setTitle] = useState('');
  const [content, setContent] = useState('');
  const [category, setCategory] = useState('');
  const [tags, setTags] = useState('');
  const [imageUrl, setImageUrl] = useState('');
  const [result, setResult] = useState<string | null>(null);

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    try {
      const res = await axios.post(
        '/index.php?rest_route=/datum/v1/create-post',
        {
          title,
          content,
          category,
          tags,
          image_url: imageUrl,
        },
        {
          withCredentials: true,
          headers: { 'Content-Type': 'application/json' }
        }
      );
      setResult(`Bài viết đã tạo`);
    } catch (error) {
      console.error(error);
      setResult('Lỗi khi tạo bài viết');
    }
  };

  return (
    <form onSubmit={handleSubmit} className="space-y-4 max-w-xl mx-auto">
      <input
        type="text"
        placeholder="Tiêu đề"
        value={title}
        onChange={e => setTitle(e.target.value)}
        className="border p-2 w-full"
        required
      />
      <textarea
        placeholder="Nội dung"
        value={content}
        onChange={e => setContent(e.target.value)}
        className="border p-2 w-full h-40"
        required
      />
      <input
        type="text"
        placeholder="category"
        value={category}
        onChange={e => setCategory(e.target.value)}
        className="border p-2 w-full"
      />
      <input
        type="text"
        placeholder="Tags (ngăn cách bằng dấu phẩy)"
        value={tags}
        onChange={e => setTags(e.target.value)}
        className="border p-2 w-full"
      />
      <input
        type="text"
        placeholder="URL ảnh đại diện"
        value={imageUrl}
        onChange={e => setImageUrl(e.target.value)}
        className="border p-2 w-full"
      />
      <button type="submit" className="bg-blue-600 text-white px-4 py-2">
        Tạo bài viết
      </button>
      {result && <p className="text-green-600">{result}</p>}
    </form>
  );
}
