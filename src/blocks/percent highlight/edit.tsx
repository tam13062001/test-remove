import { useBlockProps, MediaUpload, MediaUploadCheck, RichText } from '@wordpress/block-editor';
import { Button, TextareaControl, TextControl } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
  const { title, content, percent, percent_content, image_url } = attributes;

  return (
    <div {...useBlockProps()}>
      <TextControl
        label="Title"
        value={title}
        onChange={(val) => setAttributes({ title: val })}
      />
      <TextareaControl
        label="Content"
        value={content}
        onChange={(val) => setAttributes({ content: val })}
      />
      <TextControl
        label="Percent"
        value={percent}
        onChange={(val) => setAttributes({ percent: val })}
      />
      <TextControl
        label="Description (Percent Content)"
        value={percent_content}
        onChange={(val) => setAttributes({ percent_content: val })}
      />

      <MediaUploadCheck>
        <MediaUpload
          onSelect={(media) => setAttributes({ image_url: media.url })}
          allowedTypes={['image']}
          render={({ open }) => (
            <Button variant="secondary" onClick={open}>
              {image_url ? 'Thay ảnh' : 'Tải ảnh'}
            </Button>
          )}
        />
      </MediaUploadCheck>

      {image_url && <img src={image_url} style={{ maxWidth: '100%', marginTop: '10px' }} alt="" />}
    </div>
  );
}
