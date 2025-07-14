import { MediaUpload } from '@wordpress/block-editor';
import { Button, TextControl } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
  const { title, content, cta_text, image_url, cta_link } = attributes;

  return (
    <div className="datum-our-story-editor">
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
      <TextControl
        label="Translation key - CTA"
        value={cta_text}
        onChange={(val) => setAttributes({ cta_text: val })}
      />
      <TextControl
        label="CTA Link"
        value={cta_link}
        onChange={(val) => setAttributes({ cta_link: val })}
      />
      <div style={{ marginTop: '1rem' }}>
        <p>Background Image:</p>
        {image_url && <img src={image_url} style={{ width: '200px', marginBottom: '0.5rem' }} />}
        <MediaUpload
          onSelect={(media) => setAttributes({ image_url: media.url })}
          allowedTypes={['image']}
          render={({ open }) => <Button onClick={open}>Chọn ảnh</Button>}
        />
      </div>
    </div>
  );
}
