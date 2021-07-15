
export function spliceString(str, pos, insertStr) {
  return [str.slice(0, pos), insertStr, str.slice(pos)].join('')
}
export function getErrorMessage(errorMessages) {
  let messages = []
  if(errorMessages.length) {
    errorMessages.forEach( message => {
      if(message.length) {
        if(message!=='required') {
          messages.push(message)
        }
      }
    })
  }
  return messages.length ? messages.join() : ""
}
export function getKeyValue(record, key, empty) {
  if(record.find(column => column.key === key)!==undefined) {
    let value = record.find(column => column.key === key).value
    return value!==' --- ' ? value : empty
  }
  return empty
}
export function removeSpaces(str) {
  return str.replace(/\s/g, '')
}
export function strPad(num, size) {
  var s = num+"";
  while (s.length < size) s = "0" + s;
  return s;
}
export function objectLength( object ) {
  var length = 0;
  for( var key in object ) {
      if( object.hasOwnProperty(key) ) {
          ++length;
      }
  }
  return length;
}
export function objectKeysToArray(records) {
  let result = Object.keys(records).map(function (key) {
    return records[key]
  })
  return result
}
export function isInteger(value) {
  return /^[\d]+$/.test(value)
}
export function isIntegerInput(value) {
  let allowedValues = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'Backspace', 'Delete', 'Enter', 'Tab']
  return allowedValues.includes(value) ? true : false 
}
export function isNumber(value) {
  return /^[\d.]+$/.test(value)
}
export function isDecimalInput(value) {
  let allowedValues = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'Backspace', 'Delete', 'Enter', 'Tab']
  return allowedValues.includes(value) ? true : false 
}
export function isMobileNumber(telephone) {
  return /^04[0-9].*$/.test(telephone)===true
}
export function snakeToKebab(snake) {
  return snake.replace(/_/g, '-');
}
export function kebabToSnake(snake) {
  return snake.replace(/-/g, '_');
}
export function getTodayDate() {
  let today = new Date();
  return today.getFullYear()+'-'+('0' + (today.getMonth()+1)).slice(-2)+'-'+('0' + today.getDate()).slice(-2);
}
export function getTomorrowDate() {
  let today = new Date();
  let tomorrow = new Date();
  tomorrow.setDate(today.getDate()+1);
  return tomorrow.getFullYear()+'-'+('0' + (tomorrow.getMonth()+1)).slice(-2)+'-'+('0' + tomorrow.getDate()).slice(-2);
}
export function getYesterdayDate(date) {
	// fomat '2019-12-31'
	let dateArray = date.split('-');
	let now = new Date();
	let yesterday = new Date(dateArray[0], (dateArray[1]-1), dateArray[2], now.getHours(), now.getMinutes(), now.getSeconds(), now.getMilliseconds());
	yesterday.setDate(yesterday.getDate() - 1);
	return yesterday.getFullYear()+'-'+('0' + (yesterday.getMonth()+1)).slice(-2)+'-'+('0' + yesterday.getDate()).slice(-2);
}
/**
 * Function to sort alphabetically an array of objects by some specific key.
 * 
 * @param {String} property Key of the object to sort.
 */
export function dynamicSort(property, isNumber) {
  var sortOrder = 1;

  if(property[0] === "-") {
      sortOrder = -1;
      property = property.substr(1);
  }

  return function (a,b) {
      if(sortOrder == -1){
          return isNumber ? b[property] - a[property] : b[property].localeCompare(a[property]);
          // return b[property].localeCompare(a[property]);
      }else{
        return isNumber ? a[property] - b[property] : a[property].localeCompare(b[property]);
          // return a[property].localeCompare(b[property]);
      }        
  }
}
export function getMeta(metaName) {
  const metas = document.getElementsByTagName('meta');

  for (let i = 0; i < metas.length; i++) {
    if (metas[i].getAttribute('name') === metaName) {
      return metas[i].getAttribute('content');
    }
  }
  return '';
}
export function moneyFormat(value) {
  const formatter = new Intl.NumberFormat('en-AU', {
    style: 'currency',
    currency: 'AUD',
    minimumFractionDigits: 2
  });
  return formatter.format(value);
}

/**
 * Returns a random number between min (inclusive) and max (exclusive)
 */
export function getRandomArbitrary(min, max) {
  return Math.random() * (max - min) + min;
}

/**
* Returns a random integer between min (inclusive) and max (inclusive).
* The value is no lower than min (or the next integer greater than min
* if min isn't an integer) and no greater than max (or the next integer
* lower than max if max isn't an integer).
* Using Math.round() will give you a non-uniform distribution!
*/
export function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min + 1)) + min;
}
export function stateOptions(full=false) {
  return [
    { text: full ? 'Australian Capital Territory' : 'ACT', value: 'ACT'},
    { text: full ? 'New South Wales' : 'NSW',  value: 'NSW'},
    { text: full ? 'Northern Territory' : 'NT',  value: 'NT'},
    { text: full ? 'Queensland' : 'QLD',  value: 'QLD'},
    { text: full ? 'South Australia' : 'SA',  value: 'SA'},
    { text: full ? 'Tasmania' : 'TAS',  value: 'TAS'},
    { text: full ? 'Victoria' : 'VIC',  value: 'VIC'},
    { text: full ? 'Western Australia' : 'WA',  value: 'WA'}
  ]
}
export function getCountryName(countryCode) {
  let countryName = countryCode
  let countries = localStorage.getItem('countries') ? JSON.parse(localStorage.getItem('countries')) : null
  if(countries) {
    let country = countries.find( c => c.code===countryCode )
    if(country!==undefined) {
      countryName = country.name
    }
  }
  return countryName
}
export function numberOnQueue(queues, status) {
  let count = 0
  queues.forEach( queue => {
    if(queue.status===status) {
      count++
    }
  })
  return count
}
export function isMobile() {
  console.log(navigator.userAgent)
  if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    return true
  } 
  return false
}