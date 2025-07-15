import { TextControl, Button, TextareaControl } from '@wordpress/components';
import { MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';

export default function Edit({ attributes, setAttributes }: any) {
  const { title, data } = attributes;

  const updateItem = (index: number, key: string, value: string) => {
    const newData = [...data];
    newData[index][key] = value;
    setAttributes({ data: newData });
  };

  const addItem = () => {
    setAttributes({
      data: [
        ...data,
        { image_url: '', title: '', description: '' }
      ]
    });
  };

  const removeItem = (index: number) => {
    const newData = [...data];
    newData.splice(index, 1);
    setAttributes({ data: newData });
  };

  return (
    <div className="bg-white p-4 space-y-6">
      <TextControl
        label="Tiêu đề"
        value={title}
        onChange={(val) => setAttributes({ title: val })}
      />

      {data.map((item: any, index: number) => (
        <div key={index} className="p-4 border rounded-md bg-gray-50 space-y-3">
          <MediaUploadCheck>
            <MediaUpload
              onSelect={(media) => updateItem(index, 'image_url', media.url)}
              allowedTypes={['image']}
              render={({ open }) => (
                <Button onClick={open} isSecondary>
                  {item.image_url ? 'Đổi ảnh' : 'Chọn ảnh'}
                </Button>
              )}
            />
          </MediaUploadCheck>
          {item.image_url && (
            <img src={item.image_url} alt="" style={{ width: '100px', height: 'auto' }} />
          )}
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
          <Button isDestructive onClick={() => removeItem(index)}>Xoá item</Button>
        </div>
      ))}

      <Button isPrimary onClick={addItem}>+ Thêm item</Button>
    </div>
  );
}
