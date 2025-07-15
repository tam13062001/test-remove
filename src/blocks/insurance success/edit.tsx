import { useBlockProps, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { TextareaControl, TextControl, Button } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
  const {
    title,
    description,
    case_study_title,
    case_study_content,
    image_url
  } = attributes;

  return (
    <div {...useBlockProps()}>
      <TextControl
        label="Title"
        value={title}
        onChange={(val) => setAttributes({ title: val })}
      />
      <TextareaControl
        label="Description"
        value={description}
        onChange={(val) => setAttributes({ description: val })}
      />
      <TextControl
        label="Case Study Title"
        value={case_study_title}
        onChange={(val) => setAttributes({ case_study_title: val })}
      />
      <TextareaControl
        label="Case Study Content"
        value={case_study_content}
        onChange={(val) => setAttributes({ case_study_content: val })}
      />

      <MediaUploadCheck>
        <MediaUpload
          allowedTypes={['image']}
          onSelect={(media) => setAttributes({ image_url: media.url })}
          render={({ open }) => (
            <Button onClick={open} variant="secondary">
              {image_url ? 'Change Image' : 'Upload Image'}
            </Button>
          )}
        />
      </MediaUploadCheck>

      {image_url && (
        <img src={image_url} alt="Preview" style={{ maxWidth: '100%', marginTop: '10px' }} />
      )}
    </div>
  );
}
