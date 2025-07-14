import { MediaUpload, useBlockProps } from '@wordpress/block-editor';
import { Button, TextControl } from '@wordpress/components';
import { Fragment } from '@wordpress/element';

export default function Edit({ attributes, setAttributes }) {
  const blockProps = useBlockProps();
  const { title, content, image1, image2, image3 } = attributes;

  const renderMediaUpload = (label: string, key: 'image1' | 'image2' | 'image3', url: string) => (
    <div style={{ marginBottom: '1rem' }}>
      <p>{label}</p>
      {url && <img src={url} alt="" style={{ width: '120px', marginBottom: '0.5rem' }} />}
      <MediaUpload
        onSelect={(media) => setAttributes({ [key]: media.url })}
        allowedTypes={['image']}
        render={({ open }) => (
          <Button onClick={open} variant="secondary">Chọn ảnh</Button>
        )}
      />
    </div>
  );

  return (
    <div {...blockProps} className="our-partners-block">
      <TextControl
        label="Translation key - Title"
        value={title}
        onChange={(val) => setAttributes({ title: val })}
      />
      <TextControl
        label="Translation key - Content"
        value={content}
        onChange={(val) => setAttributes({ content: val })}
      />
      {renderMediaUpload('Logo 1', 'image1', image1)}
      {renderMediaUpload('Logo 2', 'image2', image2)}
      {renderMediaUpload('Logo 3', 'image3', image3)}
    </div>
  );
}
