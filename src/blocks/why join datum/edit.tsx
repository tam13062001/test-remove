import { MediaUpload, MediaUploadCheck, InspectorControls } from '@wordpress/block-editor';
import { TextControl, TextareaControl, Button, PanelBody } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }: any) {
  const { title, heading, content, items = [] } = attributes;

  const updateItem = (index: number, key: string, value: any) => {
    const newItems = [...items];
    newItems[index][key] = value;
    setAttributes({ items: newItems });
  };

  const addItem = () => {
    setAttributes({
      items: [
        ...items,
        { title: '', description: '', image: '' }
      ]
    });
  };

  return (
    <div className="p-4 bg-white border">
          <TextControl
            label="Title"
            value={title}
            onChange={(val) => setAttributes({ title: val })}
          />

      <h3 className="font-bold mb-2">Danh sách Item:</h3>
      {items.map((item, index) => (
        <div key={index} className="mb-4 border-t pt-4">
          <TextControl
            label="Tiêu đề"
            value={item.title}
            onChange={(val) => updateItem(index, 'title', val)}
          />
          <TextareaControl
            label="Mô tả"
            value={item.description}
            onChange={(val) => updateItem(index, 'description', val)}
          />
          <MediaUploadCheck>
            <MediaUpload
              onSelect={(media) => updateItem(index, 'image', media.url)}
              allowedTypes={['image']}
              render={({ open }) => (
                <Button onClick={open} isSecondary>
                  {item.image ? 'Thay ảnh' : 'Chọn ảnh'}
                </Button>
              )}
            />
          </MediaUploadCheck>
          {item.image && (
            <img src={item.image} alt="" style={{ maxWidth: '120px', marginTop: 8 }} />
          )}
        </div>
      ))}
      <Button onClick={addItem} variant="primary">
        + Thêm item
      </Button>
    </div>
  );
}
