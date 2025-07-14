import { __ } from '@wordpress/i18n';
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

type CardItem = {
  title: string;
  description: string;
  image_url?: string;
};

type Props = {
  attributes: {
    title: string;
    data: CardItem[];
  };
  setAttributes: (attrs: Partial<Props['attributes']>) => void;
};

export default function Edit({ attributes, setAttributes }: Props) {
  const { title, data } = attributes;

  const updateItem = (index: number, field: keyof CardItem, value: string) => {
    const newData = [...data];
    newData[index][field] = value;
    setAttributes({ data: newData });
  };

  const addItem = () => {
    setAttributes({
      data: [...data, { title: '', description: '', image_url: '' }]
    });
  };

  const removeItem = (index: number) => {
    const newData = [...data];
    newData.splice(index, 1);
    setAttributes({ data: newData });
  };

  return (
    <div {...useBlockProps()}>
      <TextControl
        label="Section Title"
        value={title}
        onChange={(value) => setAttributes({ title: value })}
      />

      {data.map((item, index) => (
        <div key={index} className="card-item-admin" style={{ borderBottom: '1px solid #ccc', paddingBottom: '16px', marginBottom: '16px' }}>
          <TextControl
            label={`Card Title ${index + 1}`}
            value={item.title}
            onChange={(value) => updateItem(index, 'title', value)}
          />

          <MediaUploadCheck>
            <MediaUpload
              onSelect={(media) => updateItem(index, 'image_url', media.url)}
              allowedTypes={['image']}
              render={({ open }) => (
                <>
                  <Button onClick={open} variant="secondary">
                    {item.image_url ? 'Change Image' : 'Select Image'}
                  </Button>
                  {item.image_url && (
                    <div style={{ marginTop: '8px' }}>
                      <img src={item.image_url} alt="" style={{ maxWidth: 120, borderRadius: 4 }} />
                    </div>
                  )}
                </>
              )}
            />
          </MediaUploadCheck>

          <Button isDestructive onClick={() => removeItem(index)} style={{ marginTop: '10px' }}>
            Remove Card
          </Button>
        </div>
      ))}

      <Button variant="primary" onClick={addItem}>
        Add Card
      </Button>
    </div>
  );
}
