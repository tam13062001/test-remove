import {
  useBlockProps,
  MediaUpload,
  MediaUploadCheck
} from '@wordpress/block-editor';
import {
  TextControl,
  TextareaControl,
  Button
} from '@wordpress/components';
import { Fragment } from '@wordpress/element';

export default function Edit({ attributes, setAttributes }) {
  const { title, imageUrl, items } = attributes;

  const safeItems = Array.isArray(items) ? items : [];

const updateItem = (index, field, value) => {
  const updatedItems = [...safeItems];
  
  // Đảm bảo item là object hợp lệ
  if (!updatedItems[index] || typeof updatedItems[index] !== 'object') {
    updatedItems[index] = { title: '', content_text: '', open: false };
  }
  
  updatedItems[index] = {
    ...updatedItems[index],
    [field]: value
  };
  
  setAttributes({ items: updatedItems });
};


  const addItem = () => {
    setAttributes({
      items: [...safeItems, { title: '', content_text: '', open: false }]
    });
  };

  const removeItem = (index) => {
    const updatedItems = [...safeItems];
    updatedItems.splice(index, 1);
    setAttributes({ items: updatedItems });
  };

  return (
    <div {...useBlockProps()}>
      <TextControl
        label="Tiêu đề tổng"
        value={title}
        onChange={(value) => setAttributes({ title: value })}
      />

      <MediaUploadCheck>
        <MediaUpload
          onSelect={(media) => setAttributes({ imageUrl: media.url })}
          allowedTypes={['image']}
          render={({ open }) => (
            <Button onClick={open} variant="secondary" className="my-2">
              {imageUrl ? 'Thay ảnh' : 'Chọn ảnh'}
            </Button>
          )}
        />
      </MediaUploadCheck>

      {imageUrl && (
        <div style={{ marginTop: '1rem' }}>
          <img
            src={imageUrl}
            style={{ width: '100%', height: 'auto' }}
            alt="Ảnh minh họa"
          />
        </div>
      )}

      <hr style={{ margin: '2rem 0' }} />

      <h3>Danh sách mục (accordion):</h3>

      {safeItems.map((item, index) => (
        <Fragment key={index}>
          <div
            style={{
              marginBottom: '1rem',
              padding: '1rem',
              backgroundColor: '#f8f8f8',
              border: '1px solid #ddd'
            }}
          >
            <TextControl
              label={`Tiêu đề mục #${index + 1}`}
              value={item?.title || ''}
              onChange={(value) => updateItem(index, 'title', value)}
            />

            <TextareaControl
              label="Nội dung"
              value={item?.content_text || ''}
              onChange={(value) => updateItem(index, 'content_text', value)}
            />

            <Button
              isDestructive
              variant="link"
              onClick={() => removeItem(index)}
              style={{ marginTop: '10px' }}
            >
              Xóa mục này
            </Button>
          </div>
        </Fragment>
      ))}

      <Button
        variant="primary"
        onClick={addItem}
        style={{ marginTop: '1rem' }}
      >
        + Thêm mục
      </Button>
    </div>
  );
}
