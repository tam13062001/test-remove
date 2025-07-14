import { useBlockProps } from '@wordpress/block-editor';
import { PanelBody, TextControl, Button } from '@wordpress/components';
import { InspectorControls } from '@wordpress/block-editor';
import { Fragment } from '@wordpress/element';

export default function Edit({ attributes, setAttributes }) {
  const { title, items } = attributes;

  const updateItem = (index: number, key: string, value: string) => {
    const updated = [...items];
    updated[index][key] = value;
    setAttributes({ items: updated });
  };

  const addItem = () => {
    setAttributes({ items: [...items, { percent: '', content: '' }] });
  };

  const removeItem = (index: number) => {
    const updated = items.filter((_, i) => i !== index);
    setAttributes({ items: updated });
  };

  return (
    <Fragment>
      <InspectorControls>
        <PanelBody title="Thiết lập chung" initialOpen={true}>
          <TextControl
            label="Tiêu đề"
            value={title}
            onChange={(val) => setAttributes({ title: val })}
          />
        </PanelBody>
      </InspectorControls>

      <div {...useBlockProps()} className="datum-statistic-block">
        <h2 className="text-xl font-bold mb-4">{title}</h2>
        {items.map((item, index) => (
          <div key={index} style={{ marginBottom: '16px', paddingBottom: '8px', borderBottom: '1px solid #eee' }}>
            <TextControl
              label="Phần trăm"
              value={item.percent}
              onChange={(val) => updateItem(index, 'percent', val)}
            />
            <TextControl
              label="Mô tả"
              value={item.content}
              onChange={(val) => updateItem(index, 'content', val)}
            />
            <Button variant="secondary" onClick={() => removeItem(index)} style={{ marginTop: '8px' }}>
              Xóa
            </Button>
          </div>
        ))}
        <Button variant="primary" onClick={addItem}>Thêm mục</Button>
      </div>
    </Fragment>
  );
}
