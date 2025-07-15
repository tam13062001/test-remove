import { useBlockProps, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { TextControl, Button, TextareaControl } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
  const { title, image_url, items } = attributes;

  const updateItem = (index: number, field: string, value: string) => {
    const newItems = [...items];
    newItems[index][field] = value;
    setAttributes({ items: newItems });
  };

  const addItem = () => {
    setAttributes({
      items: [...items, { title: '', content: '' }]
    });
  };

  const removeItem = (index: number) => {
    const newItems = [...items];
    newItems.splice(index, 1);
    setAttributes({ items: newItems });
  };

  return (
    <div {...useBlockProps()}>
      <TextControl
        label="Section Title"
        value={title}
        onChange={(val) => setAttributes({ title: val })}
      />

      <MediaUploadCheck>
        <MediaUpload
          onSelect={(media) => setAttributes({ image_url: media.url })}
          allowedTypes={['image']}
          render={({ open }) => (
            <Button onClick={open} variant="secondary">
              {image_url ? 'Thay ảnh nền' : 'Chọn ảnh nền'}
            </Button>
          )}
        />
      </MediaUploadCheck>

      {image_url && <img src={image_url} style={{ maxWidth: '100%', marginTop: 10 }} alt="" />}

      <hr style={{ margin: '20px 0' }} />
      <h3>Items</h3>

      {items.map((item, index) => (
        <div key={index} style={{ marginBottom: '16px' }}>
          <TextControl
            label={`Item ${index + 1} - Title`}
            value={item.title}
            onChange={(val) => updateItem(index, 'title', val)}
          />
          <TextareaControl
            label="Content"
            value={item.content}
            onChange={(val) => updateItem(index, 'content', val)}
          />
          <Button onClick={() => removeItem(index)} variant="secondary" isDestructive>
            Xóa item
          </Button>
        </div>
      ))}
      <Button variant="primary" onClick={addItem}>
        + Thêm Item
      </Button>
    </div>
  );
}
