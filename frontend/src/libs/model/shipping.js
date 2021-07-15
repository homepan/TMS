export function Location(data) {
  this.index = data.index!==undefined ? data.index : null
  this.id = data.id!==undefined ? data.id : null
  this.name = data.name!==undefined ? (data.name ? data.name : '') : ''
  this.displayName = data.displayName!==undefined ? (data.displayName ? data.displayName : '') : ''
  this.contactName = data.contactName!==undefined ? (data.contactName ? data.contactName : '') : ''
  this.company = data.company!==undefined ? (data.company ? data.company : '') : ''
  this.address1 = data.address1!==undefined ? (data.address1 ? data.address1 : '' ) : ''
  this.address2 = data.address2!==undefined ? (data.address2 ? data.address2 : '' ) : ''
  this.suburb = data.suburb!==undefined ? data.suburb : ''
	this.state = data.state!==undefined ? data.state : ''
  this.postcode = data.postcode!==undefined ? data.postcode : ''
  this.countryCode = data.countryCode!==undefined ? data.countryCode : 'AU'
  this.residential = data.residential!==undefined ? (data.residential ? true : false) : false
  this.telephone = data.telephone!==undefined ? (data.telephone ? data.telephone : '') : ''
  this.email = data.email!==undefined ? (data.email ? data.email : '') : ''
  this.default = data.default ? true : false
  this.active = data.active!==undefined ? data.active : 0
  this.instructions = data.instructions!==undefined ? data.instructions : ''
  this.userId = data.userId
  this.owner = data.owner!==undefined ? data.owner : ''
  this.sms = data.sms!==undefined ? data.sms : false
  this.smsCost = data.smsCost!==undefined ? data.smsCost : 0
  this.callAhead = data.callAheadCost!==undefined ? data.callAheadCost : false
  this.callAheadCost = data.callAheadCost!==undefined ? data.callAheadCost : 0
}