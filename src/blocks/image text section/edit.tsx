import { useBlockProps, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { TextControl, Button } from '@wordpress/components';
import { Fragment } from '@wordpress/element';

export default function Edit({ attributes, setAttributes }) {
  const { title, heading, content, image_url } = attributes;

  return (
    <div {...useBlockProps()}>
      <TextControl
        label="Title"
        value={title}
        onChange={(val) => setAttributes({ title: val })}
      />
      <TextControl
        label="Heading"
        value={heading}
        onChange={(val) => setAttributes({ heading: val })}
      />
      <TextControl
        label="Content"
        value={content}
        onChange={(val) => setAttributes({ content: val })}
      />

      <MediaUploadCheck>
        <MediaUpload
          onSelect={(media) => setAttributes({ image_url: media.url })}
          allowedTypes={['image']}
          render={({ open }) => (
            <Button variant="secondary" onClick={open}>
              {image_url ? 'Thay ảnh' : 'Tải ảnh lên'}
            </Button>
          )}
        />
      </MediaUploadCheck>

      {image_url && (
        <img src={image_url} alt="" style={{ width: '100%', marginTop: '10px' }} />
      )}
    </div>
  );
}
