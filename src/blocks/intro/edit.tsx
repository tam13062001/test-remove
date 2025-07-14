import { useBlockProps, MediaUpload, MediaUploadCheck,URLInput } from '@wordpress/block-editor';
import { Button, TextControl } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
  const { content, cta_text, cta_link, image_url } = attributes;

  const onSelectImage = (media: any) => {
    setAttributes({ image_url: media.url });
  };

  return (
    <div {...useBlockProps()}>
      <TextControl
        label="Translation Key - Content"
        value={content}
        onChange={(val) => setAttributes({ content: val })}
      />

      <TextControl
        label="Translation Key - CTA Text"
        value={cta_text}
        onChange={(val) => setAttributes({ cta_text: val })}
      />
    <div className="editor-url-input">
      <p><strong>CTA Link</strong></p>
      <URLInput
        value={cta_link}
        onChange={(url) => setAttributes({ cta_link: url })}
      />
    </div>


      <MediaUploadCheck>
        <MediaUpload
          onSelect={onSelectImage}
          allowedTypes={['image']}
          render={({ open }) => (
            <Button onClick={open} variant="secondary">
              {image_url ? 'Change Image' : 'Upload Image'}
            </Button>
          )}
        />
      </MediaUploadCheck>

      {image_url && <img src={image_url} style={{ maxWidth: '100%', marginTop: 10 }} />}
    </div>
  );
}
