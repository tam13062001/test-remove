import {Select, SelectProps} from "antd";
import countries from './countries.json'

type CountrySelectorProps = Omit<SelectProps, 'options'>

const options = countries.map(country => ({ label: country, value: country }))

export default function CountrySelector(props: CountrySelectorProps) {
  return <Select options={options} {...props} />
}