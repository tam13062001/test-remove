import { useBlockProps, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { TextControl, TextareaControl, Button } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
  const { title, content, image_url } = attributes;

  return (
    <div {...useBlockProps()}>
      <MediaUploadCheck>
        <MediaUpload
          onSelect={(media) => setAttributes({ image_url: media.url })}
          allowedTypes={['image']}
          render={({ open }) => (
            <Button onClick={open} variant="secondary">
              {image_url ? 'Change Image' : 'Upload Image'}
            </Button>
          )}
        />
      </MediaUploadCheck>

      {image_url && (
        <div style={{ margin: '20px 0' }}>
          <img src={image_url} alt="" style={{ maxWidth: '100%' }} />
        </div>
      )}

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
    </div>
  );
}
