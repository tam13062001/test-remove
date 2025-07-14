import { __ } from '@wordpress/i18n';
import { useBlockProps, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { TextControl, TextareaControl, Button } from '@wordpress/components';

type Props = {
  attributes: {
    title: string;
    content: string;
    btn_text: string;
    btn_url: string;
    user_name: string;
    user_title: string;
    user_avatar_url: string;
  };
  setAttributes: (attrs: Partial<Props['attributes']>) => void;
};

export default function Edit({ attributes, setAttributes }: Props) {
  const {
    title,
    content,
    btn_text,
    btn_url,
    user_name,
    user_title,
    user_avatar_url
  } = attributes;

  return (
    <div {...useBlockProps()}>
      <TextControl
        label="Title"
        value={title}
        onChange={(val) => setAttributes({ title: val })}
      />
      <TextareaControl
        label="Quote / Content"
        value={content}
        onChange={(val) => setAttributes({ content: val })}
      />
      <TextControl
        label="CTA Button Text"
        value={btn_text}
        onChange={(val) => setAttributes({ btn_text: val })}
      />
      <TextControl
        label="CTA Button URL"
        value={btn_url}
        onChange={(val) => setAttributes({ btn_url: val })}
      />
      <TextControl
        label="User Name"
        value={user_name}
        onChange={(val) => setAttributes({ user_name: val })}
      />
      <TextControl
        label="User Title"
        value={user_title}
        onChange={(val) => setAttributes({ user_title: val })}
      />

      <MediaUploadCheck>
        <MediaUpload
          onSelect={(media) => setAttributes({ user_avatar_url: media.url })}
          allowedTypes={['image']}
          render={({ open }) => (
            <div>
              <Button onClick={open} variant="secondary" style={{ marginBottom: '10px' }}>
                {user_avatar_url ? 'Change Image' : 'Select Avatar'}
              </Button>
              {user_avatar_url && <img src={user_avatar_url} alt="Avatar" style={{ maxWidth: 100 }} />}
            </div>
          )}
        />
      </MediaUploadCheck>
    </div>
  );
}
