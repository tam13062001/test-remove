import { useBlockProps, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { TextControl, Button, PanelBody, PanelRow } from '@wordpress/components';
import { Fragment } from '@wordpress/element';

interface Location {
  title: string;
  address: string;
}

interface LocationItem {
  country: string;
  open?: boolean;
  locations: Location[];
}

interface Attributes {
  title: string;
  imageUrl: string;
  locations: LocationItem[];
}

export default function Edit({ attributes, setAttributes }: { attributes: Attributes, setAttributes: any }) {
  const { title, imageUrl, locations } = attributes;

const updateCountry = (index: number, value: string) => {
  const updatedLocations = [...locations];
  if (!updatedLocations[index]) {
    updatedLocations[index] = {
      country: '',
      open: false,
      locations: []
    };
  }
  updatedLocations[index].country = value;
  setAttributes({ locations: updatedLocations });
};

  const updateLocation = (countryIndex: number, locationIndex: number, field: keyof Location, value: string) => {
    const updatedLocations = [...locations];
    updatedLocations[countryIndex].locations[locationIndex][field] = value;
    setAttributes({ locations: updatedLocations });
  };

  const addCountry = () => {
    setAttributes({
      locations: [
        ...locations,
        {
          country: 'New Country',
          open: false,
          locations: [
            {
              title: 'Office Name',
              address: 'Office Address'
            }
          ]
        }
      ]
    });
  };

  const addLocation = (countryIndex: number) => {
    const updatedLocations = [...locations];
    updatedLocations[countryIndex].locations.push({
      title: 'Office Name',
      address: 'Office Address'
    });
    setAttributes({ locations: updatedLocations });
  };

  const removeCountry = (index: number) => {
    const updatedLocations = [...locations];
    updatedLocations.splice(index, 1);
    setAttributes({ locations: updatedLocations });
  };

  const removeLocation = (countryIndex: number, locationIndex: number) => {
    const updatedLocations = [...locations];
    updatedLocations[countryIndex].locations.splice(locationIndex, 1);
    setAttributes({ locations: updatedLocations });
  };

  return (
    <div {...useBlockProps()}>
      <TextControl
        label="Section Title"
        value={title}
        onChange={(value) => setAttributes({ title: value })}
      />

      <MediaUploadCheck>
        <MediaUpload
          onSelect={(media) => setAttributes({ imageUrl: media.url })}
          allowedTypes={['image']}
          render={({ open }) => (
            <Button onClick={open} variant="secondary" className="my-2">
              {imageUrl ? 'Replace Image' : 'Select Image'}
            </Button>
          )}
        />
      </MediaUploadCheck>

      {imageUrl && (
        <div style={{ marginTop: '1rem' }}>
          <img
            src={imageUrl}
            style={{ width: '100%', height: 'auto' }}
            alt="Location Image"
          />
        </div>
      )}

      <PanelBody title="Locations" initialOpen={true}>
        {locations.map((countryItem, countryIndex) => (
          <PanelBody 
            key={countryIndex} 
            title={`Country: ${countryItem.country}`} 
            initialOpen={true}
          >
            <TextControl
              label="Country Name"
              value={countryItem.country}
              onChange={(value) => updateCountry(countryIndex, value)}
            />

            {countryItem.locations.map((location, locationIndex) => (
              <Fragment key={locationIndex}>
                <TextControl
                  label="Office Title"
                  value={location.title}
                  onChange={(value) => updateLocation(countryIndex, locationIndex, 'title', value)}
                />
                <TextControl
                  label="Office Address"
                  value={location.address}
                  onChange={(value) => updateLocation(countryIndex, locationIndex, 'address', value)}
                />
                <Button
                  isDestructive
                  variant="link"
                  onClick={() => removeLocation(countryIndex, locationIndex)}
                >
                  Remove Location
                </Button>
                <hr />
              </Fragment>
            ))}

            <Button
              variant="secondary"
              onClick={() => addLocation(countryIndex)}
            >
              + Add Location
            </Button>

            <Button
              isDestructive
              variant="link"
              onClick={() => removeCountry(countryIndex)}
              style={{ marginTop: '10px' }}
            >
              Remove Country
            </Button>
          </PanelBody>
        ))}

        <Button
          variant="primary"
          onClick={addCountry}
          style={{ marginTop: '1rem' }}
        >
          + Add Country
        </Button>
      </PanelBody>
    </div>
  );
}