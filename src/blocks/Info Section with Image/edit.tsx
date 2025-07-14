import { useBlockProps, MediaUpload, InspectorControls } from '@wordpress/block-editor';
import { Button, PanelBody, TextControl } from '@wordpress/components';
import { Fragment } from '@wordpress/element';

export default function Edit({ attributes, setAttributes }) {
  const { title, items, image_url } = attributes;

  const updateItem = (index: number, key: string, value: string) => {
    const updated = [...items];
    updated[index][key] = value;
    setAttributes({ items: updated });
  };

  const addItem = () => {
    setAttributes({ items: [...items, { title: '', content: '' }] });
  };

  const removeItem = (index: number) => {
    const updated = items.filter((_, i) => i !== index);
    setAttributes({ items: updated });
  };

  return (
    <Fragment>
      <InspectorControls>
        <PanelBody title="Cài đặt hình ảnh">
          <MediaUpload
            onSelect={(media) => setAttributes({ image_url: media.url })}
            allowedTypes={['image']}
            render={({ open }) => (
              <Button variant="primary" onClick={open}>
                {image_url ? 'Thay ảnh' : 'Chọn ảnh'}
              </Button>
            )}
          />
        </PanelBody>
      </InspectorControls>

      <div {...useBlockProps()} className="datum-info-section p-4 bg-white border border-gray-200">
        <TextControl
          label="Tiêu đề"
          value={title}
          onChange={(val) => setAttributes({ title: val })}
        />

        <div className="mt-4 space-y-6">
          {items.map((item, index) => (
            <div key={index} className="border-t pt-4">
              <TextControl
                label="Tiêu đề mục"
                value={item.title}
                onChange={(val) => updateItem(index, 'title', val)}
              />
              <TextControl
                label="Nội dung mục"
                value={item.content}
                onChange={(val) => updateItem(index, 'content', val)}
              />
              <Button variant="secondary" onClick={() => removeItem(index)} className="mt-2">Xóa mục</Button>
            </div>
          ))}
        </div>

        <Button className="mt-4" variant="primary" onClick={addItem}>Thêm mục</Button>
      </div>
    </Fragment>
  );
}
