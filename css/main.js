import { StyleSheet } from 'react-native';

export default StyleSheet.create({
  '#logoStand': {
    height: [{ unit: 'px', value: 80 }]
  },
  small: {
    color: 'red'
  },
  '#smallText': {
    color: 'red'
  },
  '#billboard': {
    width: [{ unit: '%H', value: 1 }],
    marginLeft: [{ unit: '%H', value: -0.2 }],
    marginTop: [{ unit: '%V', value: 0.075 }]
  },
  '#allIAm': {
    width: [{ unit: '%H', value: 1 }],
    height: [{ unit: '%V', value: 1 }],
    zIndex: '0',
    marginTop: [{ unit: '%V', value: -0.01 }]
  },
  '#introImage': {
    width: [{ unit: 'string', value: 'inherit' }],
    height: [{ unit: 'string', value: 'inherit' }]
  },
  '#standUp': {
    zIndex: '5',
    marginTop: [{ unit: '%V', value: -0.55 }],
    paddingLeft: [{ unit: '%H', value: 0.25 }]
  },
  '#welcomeBtn': {
    color: 'white',
    textDecoration: 'none',
    borderRadius: '50%',
    borderTop: [{ unit: 'px', value: 3 }, { unit: 'string', value: '#ffca28' }, { unit: 'string', value: 'solid' }],
    borderBottom: [{ unit: 'px', value: 3 }, { unit: 'string', value: '#ffca28' }, { unit: 'string', value: 'solid' }],
    paddingTop: [{ unit: 'px', value: 5 }],
    paddingBottom: [{ unit: 'px', value: 5 }],
    paddingLeft: [{ unit: 'px', value: 10 }],
    paddingRight: [{ unit: 'px', value: 10 }]
  },
  '#headerBody': {
    minWidth: [{ unit: '%H', value: 1 }],
    maxWidth: [{ unit: '%H', value: 1 }],
    // background-color: silver;
  },
  '#coverUL': {
    float: 'left'
  },
  // #coverUL a{
  float: left;
}
  '#myNavBar': {
    backgroundColor: 'silver',
    width: [{ unit: '%H', value: 1 }]
  },
  // .....................................
  '#mainNavBtn': {
    textDecoration: 'none',
    listStyle: 'none',
    position: 'relative',
    // float: left;
    whiteSpace: 'nowrap',
    paddingLeft: [{ unit: 'px', value: 5 }],
    paddingRight: [{ unit: 'px', value: 5 }],
    paddingTop: [{ unit: 'px', value: 3 }],
    paddingBottom: [{ unit: 'px', value: 3 }],
    backgroundColor: 'blue',
    width: [{ unit: '%H', value: 1 }],
    // display: block;
  },
  '#mainNavBtn:hover': {
    backgroundColor: 'grey'
  },
  '#mainNavBtn:hover': {
    display: 'block'
  },
  '#innerNavBtn': {
    display: 'block'
  },
  '#mainNavBtn a': {
    color: 'aqua',
    textDecoration: 'none',
    float: 'left'
  },
  // .......................................
  '#innerNavBtn': {
    position: 'relative',
    listStyle: 'none',
    textDecoration: 'none',
    paddingLeft: [{ unit: 'px', value: 5 }],
    paddingRight: [{ unit: 'px', value: 5 }],
    paddingTop: [{ unit: 'px', value: 5 }],
    paddingBottom: [{ unit: 'px', value: 5 }],
    borderBottom: [{ unit: 'string', value: 'solid' }, { unit: 'string', value: 'black' }, { unit: 'px', value: 1 }],
    display: 'none'
  },
  '#innerNavBtn a': {
    color: 'aqua',
    textDecoration: 'none'
  },
  '#innerNavBtn:hover': {
    background: 'silver'
  },
  // ..........................................
  // //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////Close off Header
  // //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////Close off Footer
  // ////////////////////////////////////////////////////////////////////////////////Home Page
  '#Encap': {
    // border: solid silver 1px;
    width: [{ unit: '%H', value: 0.6 }],
    marginLeft: [{ unit: '%H', value: 0.2 }],
    paddingTop: [{ unit: '%V', value: 0.1 }],
    paddingBottom: [{ unit: '%V', value: 0.1 }],
    backgroundColor: 'white',
    // border-radius: 20px ;
    boxShadow: [{ unit: 'px', value: 0 }, { unit: 'px', value: 4 }, { unit: 'px', value: 8 }, { unit: 'px', value: 0 }, { unit: 'string', value: 'rgba(0, 0, 0, 0.5)' }]
  },
  '#EncapReg': {
    // border: solid silver 1px;
    width: [{ unit: '%H', value: 0.6 }],
    marginLeft: [{ unit: '%H', value: 0.2 }],
    paddingTop: [{ unit: '%V', value: 0.1 }],
    paddingBottom: [{ unit: '%V', value: 0.1 }],
    backgroundColor: 'white',
    // border-radius: 20px ;
    boxShadow: [{ unit: 'px', value: 0 }, { unit: 'px', value: 4 }, { unit: 'px', value: 8 }, { unit: 'px', value: 0 }, { unit: 'string', value: 'rgba(0, 0, 0, 0.5)' }]
  },
  '#EncapReg': {
    width: [{ unit: '%H', value: 0.8 }],
    marginLeft: [{ unit: '%H', value: 0.1 }],
    paddingTop: [{ unit: '%V', value: 0.075 }],
    paddingBottom: [{ unit: '%V', value: 0.1 }]
  },
  '#CheckCover': {
    width: [{ unit: '%H', value: 0.9 }],
    float: 'left'
  },
  '#QtyCover': {
    width: [{ unit: '%H', value: 0.1 }],
    float: 'left',
    paddingBottom: [{ unit: '%V', value: 0.04 }]
  },
  '#CheckField': {
    width: [{ unit: '%H', value: 0.8 }],
    paddingTop: [{ unit: 'px', value: 5 }],
    paddingBottom: [{ unit: 'px', value: 5 }],
    marginTop: [{ unit: '%V', value: 0.025 }],
    border: [{ unit: 'string', value: 'solid' }, { unit: 'string', value: 'silver' }, { unit: 'px', value: 1 }],
    backgroundColor: 'white'
  },
  '#QtyField': {
    width: [{ unit: '%H', value: 0.8 }],
    marginBottom: [{ unit: '%V', value: 0.2 }],
    paddingTop: [{ unit: 'px', value: 5 }],
    paddingBottom: [{ unit: 'px', value: 5 }],
    marginTop: [{ unit: '%V', value: -0.025 }],
    border: [{ unit: 'string', value: 'solid' }, { unit: 'string', value: 'silver' }, { unit: 'px', value: 1 }],
    backgroundColor: 'white'
  },
  '#keepLeft': {
    backgroundColor: 'white',
    borderRadius: '20px',
    boxShadow: [{ unit: 'px', value: 0 }, { unit: 'px', value: 4 }, { unit: 'px', value: 8 }, { unit: 'px', value: 0 }, { unit: 'string', value: 'rgba(0, 0, 0, 0.3)' }],
    float: 'left',
    width: [{ unit: '%H', value: 0.4 }],
    marginTop: [{ unit: '%V', value: 0.07 }],
    marginLeft: [{ unit: '%H', value: 0.07 }],
    paddingTop: [{ unit: '%V', value: 0.075 }],
    paddingBottom: [{ unit: '%V', value: 0.1 }]
  },
  '#txtField': {
    border: [{ unit: 'string', value: 'none' }],
    backgroundColor: 'rgba(0, 0, 0, 0.4)',
    borderBottom: [{ unit: 'px', value: 1.5 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: 'white' }],
    // color: white;
    minWidth: [{ unit: 'px', value: 250 }],
    // border-radius: 10px;
    paddingTop: [{ unit: 'px', value: 5 }],
    paddingBottom: [{ unit: 'px', value: 5 }],
    textAlign: 'center',
    // margin-left: 25px;
    marginBottom: [{ unit: 'px', value: 25 }],
    paddingTop: [{ unit: 'px', value: 10 }],
    paddingBottom: [{ unit: 'px', value: 10 }],
    border: [{ unit: 'string', value: 'solid' }, { unit: 'string', value: 'silver' }, { unit: 'px', value: 1 }],
    backgroundColor: 'white'
  },
  '#txtFields': {
    border: [{ unit: 'string', value: 'none' }],
    backgroundColor: 'rgba(0, 0, 0, 0.4)',
    borderBottom: [{ unit: 'px', value: 1.5 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: 'white' }],
    // color: white;
    minWidth: [{ unit: 'px', value: 250 }],
    // border-radius: 10px;
    paddingTop: [{ unit: 'px', value: 5 }],
    paddingBottom: [{ unit: 'px', value: 5 }],
    textAlign: 'center',
    // margin-left: 25px;
    marginBottom: [{ unit: 'px', value: 25 }],
    paddingTop: [{ unit: 'px', value: 10 }],
    paddingBottom: [{ unit: 'px', value: 10 }],
    border: [{ unit: 'string', value: 'solid' }, { unit: 'string', value: 'silver' }, { unit: 'px', value: 1 }],
    backgroundColor: 'white'
  },
  '#txtFields': {
    // color: white;
    paddingTop: [{ unit: 'px', value: 10 }],
    paddingBottom: [{ unit: 'px', value: 10 }],
    border: [{ unit: 'string', value: 'solid' }, { unit: 'string', value: 'silver' }, { unit: 'px', value: 1 }],
    backgroundColor: 'white'
  },
  '#txtAreas': {
    // color: white;
    paddingTop: [{ unit: 'px', value: 10 }],
    paddingBottom: [{ unit: 'px', value: 10 }],
    border: [{ unit: 'string', value: 'solid' }, { unit: 'string', value: 'silver' }, { unit: 'px', value: 1 }],
    backgroundColor: 'white'
  },
  '#txtFieldsToSpan': {
    border: [{ unit: 'string', value: 'none' }],
    backgroundColor: 'rgba(0, 0, 0, 0.4)',
    borderBottom: [{ unit: 'px', value: 1.5 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: 'white' }],
    // color: white;
    minWidth: [{ unit: 'px', value: 500 }],
    // border-radius: 10px;
    paddingTop: [{ unit: 'px', value: 5 }],
    paddingBottom: [{ unit: 'px', value: 5 }],
    textAlign: 'center',
    // margin-left: 25px;
    marginBottom: [{ unit: 'px', value: 25 }],
    paddingTop: [{ unit: 'px', value: 10 }],
    paddingBottom: [{ unit: 'px', value: 10 }],
    border: [{ unit: 'string', value: 'solid' }, { unit: 'string', value: 'silver' }, { unit: 'px', value: 1 }],
    backgroundColor: 'white'
  },
  '#txtFieldsToAccomodate': {
    border: [{ unit: 'string', value: 'none' }],
    backgroundColor: 'rgba(0, 0, 0, 0.4)',
    borderBottom: [{ unit: 'px', value: 1.5 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: 'white' }],
    // color: white;
    minWidth: [{ unit: 'px', value: 330 }],
    // border-radius: 10px;
    paddingTop: [{ unit: 'px', value: 5 }],
    paddingBottom: [{ unit: 'px', value: 5 }],
    textAlign: 'center',
    // margin-left: 25px;
    marginBottom: [{ unit: 'px', value: 25 }],
    paddingTop: [{ unit: 'px', value: 10 }],
    paddingBottom: [{ unit: 'px', value: 10 }],
    border: [{ unit: 'string', value: 'solid' }, { unit: 'string', value: 'silver' }, { unit: 'px', value: 1 }],
    backgroundColor: 'white'
  },
  '#txtFieldsToAccomodateToArea': {
    border: [{ unit: 'string', value: 'none' }],
    backgroundColor: 'rgba(0, 0, 0, 0.4)',
    borderBottom: [{ unit: 'px', value: 1.5 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: 'white' }],
    // color: white;
    minWidth: [{ unit: 'px', value: 380 }],
    // border-radius: 10px;
    paddingTop: [{ unit: 'px', value: 5 }],
    paddingBottom: [{ unit: 'px', value: 5 }],
    textAlign: 'center',
    // margin-left: 25px;
    marginBottom: [{ unit: 'px', value: 25 }],
    paddingTop: [{ unit: 'px', value: 10 }],
    paddingBottom: [{ unit: 'px', value: 10 }],
    border: [{ unit: 'string', value: 'solid' }, { unit: 'string', value: 'silver' }, { unit: 'px', value: 1 }],
    backgroundColor: 'white'
  },
  '#AvailabilityBtn': {
    // background-color: none;
    background: 'none',
    border: [{ unit: 'px', value: 2 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: 'lime' }],
    color: 'black',
    marginLeft: [{ unit: '%H', value: 0.2 }],
    width: [{ unit: '%H', value: 0.6 }],
    transitionDelay: '100ms',
    transitionDuration: '1000ms',
    animationDirection: 'alternate',
    paddingTop: [{ unit: 'px', value: 5 }],
    paddingBottom: [{ unit: 'px', value: 5 }]
  },
  '#SaveBtn': {
    // background-color: none;
    background: 'none',
    border: [{ unit: 'px', value: 2 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: 'lime' }],
    color: 'black',
    marginLeft: [{ unit: '%H', value: 0.2 }],
    width: [{ unit: '%H', value: 0.6 }],
    transitionDelay: '100ms',
    transitionDuration: '1000ms',
    animationDirection: 'alternate',
    paddingTop: [{ unit: 'px', value: 5 }],
    paddingBottom: [{ unit: 'px', value: 5 }]
  },
  '#AvailabilityBtn:hover': {
    border: [{ unit: 'px', value: 2 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: 'aqua' }],
    transitionDelay: '100ms',
    transitionDuration: '1000ms',
    animationDirection: 'alternate',
    color: '#1c2537',
    // background-color: lime;
    boxShadow: [{ unit: 'px', value: 2 }, { unit: 'px', value: 2 }, { unit: 'px', value: 5 }, { unit: 'string', value: '#000' }]
  },
  '#SaveBtn:hover': {
    border: [{ unit: 'px', value: 2 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: 'aqua' }],
    transitionDelay: '100ms',
    transitionDuration: '1000ms',
    animationDirection: 'alternate',
    color: '#1c2537',
    // background-color: lime;
    boxShadow: [{ unit: 'px', value: 2 }, { unit: 'px', value: 2 }, { unit: 'px', value: 5 }, { unit: 'string', value: '#000' }]
  },
  '#CancelBtn': {
    background: 'none',
    // background-color: none;
    border: [{ unit: 'px', value: 2 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: 'orange' }],
    color: 'black',
    marginLeft: [{ unit: '%H', value: 0.2 }],
    width: [{ unit: '%H', value: 0.6 }],
    transitionDelay: '100ms',
    transitionDuration: '1000ms',
    animationDirection: 'alternate',
    paddingTop: [{ unit: 'px', value: 5 }],
    paddingBottom: [{ unit: 'px', value: 5 }],
    paddingLeft: [{ unit: 'px', value: 50 }],
    paddingRight: [{ unit: 'px', value: 50 }],
    textDecoration: 'none'
  },
  '#CancelBtn:hover': {
    border: [{ unit: 'px', value: 2 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: 'red' }],
    transitionDelay: '100ms',
    transitionDuration: '1000ms',
    animationDirection: 'alternate',
    color: 'black',
    // background-color: lime;
    boxShadow: [{ unit: 'px', value: 2 }, { unit: 'px', value: 2 }, { unit: 'px', value: 5 }, { unit: 'string', value: '#000' }],
    textDecoration: 'none'
  },
  '#spacer': {
    paddingLeft: [{ unit: 'px', value: 5 }],
    // color: white;
  },
  '#radioBtns': {
    top: [{ unit: 'px', value: 0 }],
    bottom: [{ unit: 'px', value: 0 }],
    width: [{ unit: 'px', value: 35 }],
    height: [{ unit: 'px', value: 35 }],
    backgroundColor: '#eee',
    color: 'green',
    boxShadow: [{ unit: 'px', value: 0 }, { unit: 'px', value: 1 }, { unit: 'px', value: 1 }, { unit: 'string', value: 'grey' }],
    borderRadius: '50%',
    backgroundRadius: '50px',
    marginLeft: [{ unit: '%H', value: 0.025 }],
    border: [{ unit: 'string', value: 'solid' }, { unit: 'string', value: 'black' }, { unit: 'px', value: 2 }],
    marginTop: [{ unit: 'px', value: 5 }],
    paddingBottom: [{ unit: 'px', value: 15 }],
    // display: grid;
    marginTop: [{ unit: 'px', value: -2 }]
  },
  '#radioLabel': {
    marginBottom: [{ unit: 'px', value: 10 }],
    marginLeft: [{ unit: 'px', value: 15 }]
  },
  '#checkboxHolder': {
    width: [{ unit: '%H', value: 1 }],
    paddingLeft: [{ unit: 'px', value: 15 }],
    paddingRight: [{ unit: 'px', value: 5 }],
    paddingTop: [{ unit: 'px', value: 5 }],
    paddingBottom: [{ unit: 'px', value: 5 }],
    marginLeft: [{ unit: 'px', value: 2.5 }],
    marginRight: [{ unit: 'px', value: 2.5 }],
    marginTop: [{ unit: 'px', value: 2.5 }],
    marginBottom: [{ unit: 'px', value: 2.5 }],
    backgroundColor: 'white',
    // border: solid grey 1px;
    boxShadow: [{ unit: 'px', value: 0 }, { unit: 'px', value: 4 }, { unit: 'px', value: 8 }, { unit: 'px', value: 0 }, { unit: 'string', value: 'rgba(0, 0, 0, 0.5)' }],
    float: 'left'
  },
  '#proceed': {
    paddingTop: [{ unit: 'px', value: 10 }],
    paddingBottom: [{ unit: 'px', value: 10 }],
    paddingLeft: [{ unit: 'px', value: 50 }],
    paddingRight: [{ unit: 'px', value: 50 }],
    textDecoration: 'none',
    textAlign: 'center',
    borderRadius: '5px',
    border: [{ unit: 'px', value: 1 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: '#42D1AE' }],
    color: 'white',
    background: 'linear-gradient(-185deg, #42D1AE 0%, #4AB9C4 100%)',
    boxShadow: [{ unit: 'px', value: 0 }, { unit: 'px', value: 4 }, { unit: 'px', value: 8 }, { unit: 'px', value: 0 }, { unit: 'string', value: 'rgba(0, 0, 0, 0.5)' }]
  },
  '#return': {
    backgroundColor: 'white',
    color: 'black',
    paddingTop: [{ unit: 'px', value: 10 }],
    paddingBottom: [{ unit: 'px', value: 10 }],
    paddingLeft: [{ unit: 'px', value: 50 }],
    paddingRight: [{ unit: 'px', value: 50 }],
    textDecoration: 'none',
    textAlign: 'center',
    borderRadius: '5px',
    border: [{ unit: 'px', value: 1 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: 'red' }],
    boxShadow: [{ unit: 'px', value: 0 }, { unit: 'px', value: 4 }, { unit: 'px', value: 8 }, { unit: 'px', value: 0 }, { unit: 'string', value: 'rgba(0, 0, 0, 0.5)' }]
  },
  '#info': {
    backgroundColor: 'white',
    color: 'black',
    paddingTop: [{ unit: 'px', value: 10 }],
    paddingBottom: [{ unit: 'px', value: 10 }],
    paddingLeft: [{ unit: 'px', value: 50 }],
    paddingRight: [{ unit: 'px', value: 50 }],
    textDecoration: 'none',
    textAlign: 'center',
    borderRadius: '5px',
    border: [{ unit: 'px', value: 1 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: 'blue' }],
    boxShadow: [{ unit: 'px', value: 0 }, { unit: 'px', value: 4 }, { unit: 'px', value: 8 }, { unit: 'px', value: 0 }, { unit: 'string', value: 'rgba(0, 0, 0, 0.5)' }]
  },
  '#like': {
    backgroundColor: 'white',
    color: '#00a3d4',
    paddingTop: [{ unit: 'px', value: 11 }],
    paddingBottom: [{ unit: 'px', value: 8 }],
    paddingLeft: [{ unit: 'px', value: 10 }],
    paddingRight: [{ unit: 'px', value: 10 }],
    textDecoration: 'none',
    textAlign: 'center',
    borderRadius: '5px',
    border: [{ unit: 'px', value: 1 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: '#00a3d4' }],
    boxShadow: [{ unit: 'px', value: 0 }, { unit: 'px', value: 4 }, { unit: 'px', value: 8 }, { unit: 'px', value: 0 }, { unit: 'string', value: 'rgba(0, 0, 0, 0.5)' }]
  },
  'input:valid': {
    boxShadow: [{ unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 5 }, { unit: 'px', value: 1 }, { unit: 'string', value: 'lime' }]
  },
  'textarea:valid': {
    boxShadow: [{ unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 5 }, { unit: 'px', value: 1 }, { unit: 'string', value: 'lime' }]
  },
  'select:valid': {
    boxShadow: [{ unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 5 }, { unit: 'px', value: 1 }, { unit: 'string', value: 'lime' }]
  },
  'input:invalid': {
    boxShadow: [{ unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 5 }, { unit: 'px', value: 1 }, { unit: 'string', value: 'red' }]
  },
  'textarea:invalid': {
    boxShadow: [{ unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 5 }, { unit: 'px', value: 1 }, { unit: 'string', value: 'red' }]
  },
  'select:invalid': {
    boxShadow: [{ unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 5 }, { unit: 'px', value: 1 }, { unit: 'string', value: 'red' }]
  },
  'input:focus:invalid': {
    boxShadow: [{ unit: 'string', value: 'none' }, { unit: 'string', value: 'none' }, { unit: 'string', value: 'none' }, { unit: 'string', value: 'none' }]
  },
  'textarea:focus:invalid': {
    boxShadow: [{ unit: 'string', value: 'none' }, { unit: 'string', value: 'none' }, { unit: 'string', value: 'none' }, { unit: 'string', value: 'none' }]
  },
  'select:focus:invalid': {
    boxShadow: [{ unit: 'string', value: 'none' }, { unit: 'string', value: 'none' }, { unit: 'string', value: 'none' }, { unit: 'string', value: 'none' }]
  },
  '#myAvatar': {
    minWidth: [{ unit: 'px', value: 200 }],
    maxWidth: [{ unit: 'px', value: 200 }],
    maxHeight: [{ unit: 'px', value: 200 }],
    maxHeight: [{ unit: 'px', value: 200 }]
  },
  'input[type=number]::-webkit-inner-spin-button': {
    WebkitAppearance: 'none',
    margin: [{ unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 0 }]
  },
  'input[type=number]::-webkit-outer-spin-button': {
    WebkitAppearance: 'none',
    margin: [{ unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 0 }]
  },
  'input[type=Date]::-webkit-inner-spin-button': {
    WebkitAppearance: 'none',
    margin: [{ unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 0 }]
  },
  'input[type=Date]::-webkit-outer-spin-button': {
    WebkitAppearance: 'none',
    margin: [{ unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 0 }]
  },
  '#sizeImgTickCross': {
    width: [{ unit: 'px', value: 160 }],
    height: [{ unit: 'px', value: 150 }]
  },
  '#dashPanelLeft': {
    borderLeft: [{ unit: 'string', value: 'black' }, { unit: 'string', value: 'solid' }, { unit: 'px', value: 1 }],
    borderTop: [{ unit: 'string', value: 'black' }, { unit: 'string', value: 'solid' }, { unit: 'px', value: 1 }],
    // border-bottom: black solid 1px;
    borderRadius: '2.5px',
    width: [{ unit: '%H', value: 2 }],
    paddingLeft: [{ unit: '%H', value: 0.05 }],
    height: [{ unit: 'px', value: 150 }],
    // float: left;
    boxShadow: [{ unit: 'string', value: 'inset' }, { unit: 'px', value: 0 }, { unit: 'em', value: -3 }, { unit: 'em', value: 3 }, { unit: 'string', value: 'rgba(0,0,0,0.1)' }, { unit: 'string', value: 'rgba(0,0,0,0.1),
' }, { unit: 'string', value: '' }, { unit: 'string', value: '' }, { unit: 'string', value: '' }, { unit: 'string', value: '' }, { unit: 'string', value: '' }, { unit: 'string', value: '' }, { unit: 'string', value: '' }, { unit: 'string', value: '' }, { unit: 'string', value: '' }, { unit: 'string', value: '' }, { unit: 'string', value: '' }, { unit: 'string', value: '' }, { unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'string', value: '' }, { unit: 'px', value: 0 }, { unit: 'px', value: 2 }, { unit: 'string', value: 'rgb(255,255,255)' }, { unit: 'string', value: 'rgb(255,255,255),
' }, { unit: 'string', value: '' }, { unit: 'string', value: '' }, { unit: 'string', value: '' }, { unit: 'string', value: '' }, { unit: 'string', value: '' }, { unit: 'string', value: '' }, { unit: 'string', value: '' }, { unit: 'string', value: '' }, { unit: 'string', value: '' }, { unit: 'string', value: '' }, { unit: 'string', value: '' }, { unit: 'string', value: '' }, { unit: 'em', value: 0.3 }, { unit: 'em', value: 0.3 }, { unit: 'em', value: 1 }, { unit: 'string', value: 'rgba(0,0,0,0.3)' }],
    marginLeft: [{ unit: '%H', value: 0.03 }],
    marginBottom: [{ unit: '%V', value: 0.05 }]
  },
  '#BottomLine': {
    // background-color: silver;
    color: 'navy',
    textDecoration: 'none'
  },
  '#BottomLine:hover': {
    backgroundColor: 'grey',
    color: 'white',
    textDecoration: 'none'
  },
  '#HoldMessage': {
    backgroundColor: 'white',
    // border: green 1px solid;
    borderTopLeftRadius: '0px',
    borderTopRightRadius: '25px',
    borderBottomLeftRadius: '25px',
    borderBottomRightRadius: '25px',
    float: 'left',
    width: [{ unit: '%H', value: 1 }],
    paddingTop: [{ unit: '%V', value: 0.015 }],
    paddingBottom: [{ unit: '%V', value: 0.015 }],
    paddingLeft: [{ unit: '%H', value: 0.015 }],
    paddingRight: [{ unit: '%H', value: 0.015 }],
    boxShadow: [{ unit: 'px', value: 0 }, { unit: 'px', value: 4 }, { unit: 'px', value: 8 }, { unit: 'px', value: 0 }, { unit: 'string', value: 'rgba(0, 0, 0, 0.25)' }]
  },
  '#HoldCommentToRight': {
    float: 'right',
    minWidth: [{ unit: '%H', value: 0.25 }],
    maxWidth: [{ unit: '%H', value: 0.75 }],
    borderRight: [{ unit: 'string', value: 'grey' }, { unit: 'px', value: 1 }, { unit: 'string', value: 'solid' }],
    marginBottom: [{ unit: 'px', value: 20 }],
    backgroundColor: 'none',
    padding: [{ unit: 'px', value: 5 }, { unit: 'px', value: 5 }, { unit: 'px', value: 5 }, { unit: 'px', value: 5 }],
    textAlign: 'center',
    fontWeight: '900',
    position: 'relative',
    boxShadow: [{ unit: 'px', value: 0 }, { unit: 'px', value: 4 }, { unit: 'px', value: 8 }, { unit: 'px', value: 0 }, { unit: 'string', value: 'rgba(0, 0, 0, 0.25)' }],
    borderRadius: '5px',
    borderTopLeftRadius: '15px',
    borderBottomLeftRadius: '15px'
  },
  '#HoldCommentToRight:before': {
    content: '""',
    width: [{ unit: 'px', value: 0 }],
    height: [{ unit: 'px', value: 0 }],
    position: 'absolute',
    borderLeft: [{ unit: 'px', value: 15 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: 'grey' }],
    borderRight: [{ unit: 'px', value: 10 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: 'transparent' }],
    borderTop: [{ unit: 'px', value: 10 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: 'transparent' }],
    borderBottom: [{ unit: 'px', value: 10 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: 'transparent' }],
    right: [{ unit: 'px', value: -25 }]
  },
  '#HoldCommentToLeft': {
    float: 'left',
    minWidth: [{ unit: '%H', value: 0.25 }],
    maxWidth: [{ unit: '%H', value: 0.75 }],
    borderLeft: [{ unit: 'string', value: 'grey' }, { unit: 'px', value: 1 }, { unit: 'string', value: 'solid' }],
    marginBottom: [{ unit: 'px', value: 20 }],
    backgroundColor: 'none',
    padding: [{ unit: 'px', value: 5 }, { unit: 'px', value: 5 }, { unit: 'px', value: 5 }, { unit: 'px', value: 5 }],
    fontWeight: '900',
    position: 'relative',
    boxShadow: [{ unit: 'px', value: 0 }, { unit: 'px', value: 4 }, { unit: 'px', value: 8 }, { unit: 'px', value: 0 }, { unit: 'string', value: 'rgba(0, 0, 0, 0.25)' }],
    borderRadius: '5px',
    borderTopRightRadius: '15px',
    borderBottomRightRadius: '15px'
  },
  '#HoldCommentToLeft:before': {
    content: '''',
    width: [{ unit: 'px', value: 0 }],
    height: [{ unit: 'px', value: 0 }],
    position: 'absolute',
    borderLeft: [{ unit: 'px', value: 15 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: 'grey' }],
    borderRight: [{ unit: 'px', value: 10 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: 'transparent' }],
    borderTop: [{ unit: 'px', value: 10 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: 'transparent' }],
    borderBottom: [{ unit: 'px', value: 10 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: 'transparent' }],
    left: [{ unit: 'px', value: -26 }],
    transform: 'rotate(180deg)'
  },
  legendClosure: {
    backgroundColor: 'none',
    color: 'none',
    border: [{ unit: 'string', value: 'none' }],
    display: 'block',
    position: 'absolute',
    left: [{ unit: 'em', value: 22.5 }],
    top: [{ unit: 'em', value: -1.25 }],
    fontSize: [{ unit: 'px', value: 14 }]
  },
  '#AlignLeft': {
    textAlign: 'right'
  },
  '#AlignTimeStamp': {
    color: 'grey',
    opacity: '0.5',
    marginTop: [{ unit: 'px', value: -20 }],
    float: 'right'
  },
  '#CommentsWrapper': {
    backgroundColor: 'green',
    paddingLeft: [{ unit: 'px', value: 2.5 }],
    paddingRight: [{ unit: 'px', value: 2.5 }],
    paddingTop: [{ unit: 'px', value: 1.5 }],
    paddingBottom: [{ unit: 'px', value: 1.5 }],
    borderRadius: '10px',
    border: [{ unit: 'string', value: 'solid' }, { unit: 'string', value: 'maroon' }, { unit: 'px', value: 1 }],
    color: 'white'
  },
  '#coverGrey': {
    // background-color: #D3D3D3;
    backgroundColor: '#363534',
    borderRight: [{ unit: 'string', value: 'solid' }, { unit: 'string', value: '#D3D3D3' }, { unit: 'px', value: 5 }],
    width: [{ unit: 'px', value: 300 }],
    height: [{ unit: '%V', value: 1 }],
    marginTop: [{ unit: '%V', value: -0.25 }],
    marginLeft: [{ unit: '%H', value: 0.5 }],
    color: 'white',
    boxShadow: [{ unit: 'px', value: 0 }, { unit: 'px', value: 4 }, { unit: 'px', value: 8 }, { unit: 'px', value: 0 }, { unit: 'string', value: 'rgba(0, 0, 0, 0.8)' }]
  },
  '#coverGrey table tr td': {
    color: 'white'
  },
  '#coverGrey table tr td #AvailabilityBtn': {
    color: 'white'
  },
  '#coverGrey table tr td input': {
    color: 'black'
  },
  '#MyProfileText': {
    fontFamily: 'monospace'
  },
  '#PicSide': {
    backgroundColor: 'white',
    marginLeft: [{ unit: '%H', value: -0.1 }],
    width: [{ unit: '%H', value: 0.5 }],
    height: [{ unit: '%V', value: 0.6 }],
    borderBottomLeftRadius: '10px',
    borderBottomRightRadius: '10px',
    // box-shadow: 0px 0px 15px #000;
    boxShadow: [{ unit: 'px', value: 0 }, { unit: 'px', value: 4 }, { unit: 'px', value: 8 }, { unit: 'px', value: 0 }, { unit: 'string', value: 'rgba(0, 0, 0, 0.3)' }],
    float: 'left',
    zIndex: '5',
    fontFamily: 'serif'
  },
  '#upperPicSide': {
    width: [{ unit: '%H', value: 1 }],
    height: [{ unit: '%V', value: 0.8 }],
    backgroundColor: 'aqua',
    backgroundImage: 'url("../assets/images/profileBanner.jpg")',
    color: 'white',
    textShadow: [{ unit: 'px', value: 2 }, { unit: 'px', value: 2 }, { unit: 'px', value: 4 }, { unit: 'string', value: '#000000' }]
  },
  '#profilePic': {
    width: [{ unit: 'px', value: 200 }],
    height: [{ unit: 'px', value: 200 }],
    border: [{ unit: 'string', value: 'solid' }, { unit: 'string', value: 'white' }, { unit: 'px', value: 2 }],
    borderRadius: '50%'
  },
  '#profilePic:hover': {
    backgroundColor: 'grey',
    opacity: '0.5'
  },
  '#profilePhoto': {
    minWidth: [{ unit: 'px', value: 200 }],
    maxWidth: [{ unit: 'px', value: 200 }],
    minHeight: [{ unit: 'px', value: 200 }],
    maxHeight: [{ unit: 'px', value: 200 }],
    border: [{ unit: 'string', value: 'solid' }, { unit: 'string', value: 'white' }, { unit: 'px', value: 8 }],
    borderRadius: '50%',
    // float: left;
  margin-left: 25%;
  },
  '#stayLeft': {
    paddingLeft: [{ unit: '%H', value: -0.5 }],
    zIndex: '10'
  },
  '#lowerPicSide': {
    width: [{ unit: '%H', value: 1 }],
    height: [{ unit: '%V', value: 0.2 }],
    backgroundColor: 'white',
    borderBottomRightRadius: '10px',
    borderBottomLeftRadius: '10px',
    fontFamily: 'monospace'
  },
  '#CardHolder': {
    marginTop: [{ unit: '%V', value: -0.73 }],
    marginLeft: [{ unit: '%H', value: 0.402 }],
    width: [{ unit: '%H', value: 0.65 }],
    height: [{ unit: '%V', value: 0.55 }],
    borderTopRightRadius: '10px',
    borderBottomRightRadius: '10px',
    borderLeft: [{ unit: 'px', value: 10 }],
    // box-shadow: 0px 0px 5px #000;
    boxShadow: [{ unit: 'px', value: 0 }, { unit: 'px', value: 4 }, { unit: 'px', value: 8 }, { unit: 'px', value: 0 }, { unit: 'string', value: 'rgba(0, 0, 0, 0.5)' }],
    float: 'left',
    zIndex: '-1',
    color: 'black',
    // font-family: serif;
    fontFamily: 'monospace',
    paddingLeft: [{ unit: '%H', value: 0.05 }]
  }
});
