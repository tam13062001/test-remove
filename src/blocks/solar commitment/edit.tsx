import { MediaUpload, MediaUploadCheck, useBlockProps } from '@wordpress/block-editor';
import { TextControl, TextareaControl, Button } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
  const {
    commitmentTitle,
    commitmentContent,
    commitmentImage,
    successTitle,
    successIntro,
    caseTitle,
    caseContent,
    caseImage,
    footerContent
  } = attributes;

  const handleChange = (key: string, value: string) => {
    setAttributes({ [key]: value });
  };

  return (
    <div {...useBlockProps()}>
      <h3>Commitment Section</h3>
      <TextControl label="Commitment Title" value={commitmentTitle} onChange={(val) => handleChange('commitmentTitle', val)} />
      <TextareaControl label="Commitment Content" value={commitmentContent} onChange={(val) => handleChange('commitmentContent', val)} />
      <MediaUploadCheck>
        <MediaUpload
          onSelect={(media) => handleChange('commitmentImage', media.url)}
          allowedTypes={['image']}
          render={({ open }) => (
            <Button onClick={open} variant="secondary">
              {commitmentImage ? 'Change Image' : 'Upload Image'}
            </Button>
          )}
        />
      </MediaUploadCheck>

      <h3>Case Study Section</h3>
      <TextControl label="Success Title" value={successTitle} onChange={(val) => handleChange('successTitle', val)} />
      <TextareaControl label="Intro Text" value={successIntro} onChange={(val) => handleChange('successIntro', val)} />
      <TextControl label="Case Study Title" value={caseTitle} onChange={(val) => handleChange('caseTitle', val)} />
      <TextareaControl label="Case Study Content" value={caseContent} onChange={(val) => handleChange('caseContent', val)} />
      <MediaUploadCheck>
        <MediaUpload
          onSelect={(media) => handleChange('caseImage', media.url)}
          allowedTypes={['image']}
          render={({ open }) => (
            <Button onClick={open} variant="secondary">
              {caseImage ? 'Change Image' : 'Upload Image'}
            </Button>
          )}
        />
      </MediaUploadCheck>

      <h3>Footer</h3>
      <TextareaControl label="Footer Content" value={footerContent} onChange={(val) => handleChange('footerContent', val)} />
    </div>
  );
}
