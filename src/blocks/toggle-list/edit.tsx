import { useBlockProps, RichText } from '@wordpress/block-editor';
import { TextControl, Button } from '@wordpress/components';
import { Fragment } from '@wordpress/element';

export default function Edit({ attributes, setAttributes }) {
  const { title, items } = attributes;

  const updateItem = (index: number, key: string, value: string) => {
    const updated = [...items];
    updated[index][key] = value;
    setAttributes({ items: updated });
  };

  const addItem = () => {
    setAttributes({ items: [...items, { title: '', content: '' }] });
  };

  const removeItem = (index: number) => {
    const updated = [...items];
    updated.splice(index, 1);
    setAttributes({ items: updated });
  };

  return (
    <div {...useBlockProps()} className="datum-toggle-list-editor">
      <TextControl
        label="Tiêu đề chính"
        value={title}
        onChange={(val) => setAttributes({ title: val })}
      />
      {items.map((item, i) => (
        <Fragment key={i}>
          <TextControl
            label={`Tiêu đề mục ${i + 1}`}
            value={item.title}
            onChange={(val) => updateItem(i, 'title', val)}
          />
          <RichText
            tagName="div"
            multiline="p"
            label="Nội dung HTML"
            value={item.content}
            onChange={(val) => updateItem(i, 'content', val)}
            placeholder="<ul><li>...</li></ul>"
            allowedFormats={[]}
          />
          <Button variant="secondary" onClick={() => removeItem(i)}>
            Xóa mục
          </Button>
          <hr />
        </Fragment>
      ))}
      <Button variant="primary" onClick={addItem}>Thêm mục</Button>
    </div>
  );
}
