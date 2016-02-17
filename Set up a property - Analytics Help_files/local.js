/* Custom function for form gclid.
 *
 * This function takes website url and adds the gclid test parameter.
 *
 * @param {Array.<Object.<string>>} values An array containing objects
 *     representing field ids to field values.
 * @return {string} The result of processing the form.
 */
formFunctions.gclidFunction = function(values) {

  // Initialize the variables.
  var website = '';
  var fragment = '';

  // Assign value to variable
  if (values[0] && values[0].name === 'website') {
    website = values[0].value;
  } else {
    return;
  }

  // Extract # fragment from URL if it exists.
  if (website.indexOf('#') !== -1) {
    fragment = website.substring(website.indexOf('#'));
    website = website.substring(0, website.indexOf('#'));
  }

  // If input url has the form http://www.google.com, add a "/".
  // Don't add a "/" if url already has a "/" ignoring the http(s)://
  // Don't add a "/" if url has a "?" in it.
  if (website.indexOf('/', 9) === -1 && website.indexOf('?') === -1) {
    website += '/';
  }

  // Add ? or & to website URL.
  if (website.indexOf('?') === -1) {
    website += '?';
  } else {
    website += '&';
  }

  // Add gclid parameter.
  website += 'gclid=TeSt-123';

  // Add fragment to website if it exists.
  if (fragment) {
    website += fragment;
  }

  // Return the result.
  return website;
};


/* Custom function for form url_builder.
 *
 * This function takes website url and campaign parameters and combines them
 * into a tracking URL.
 *
 * @param {Array.<Object.<string, string>>} values An array containing objects
 *     representing field ids to field values.
 * @return {string} The result of processing the form.
 */
formFunctions.urlBuilderFunction = function(values) {

  // Initialize the variables.
  var website = '';
  var utm_source = '';
  var utm_medium = '';
  var utm_term = '';
  var utm_content = '';
  var utm_campaign = '';
  var fragment = '';

  // Assign values to variables and remove spaces.
  for (var i = 0; i < values.length; i++) {
    if (values[i]) {
      switch (values[i].name) {
        case 'website':
          website = values[i].value;
          break;
        case 'utm_source':
          utm_source = encodeURIComponent(values[i].value);
          break;
        case 'utm_medium':
          utm_medium = encodeURIComponent(values[i].value);
          break;
        case 'utm_term':
          utm_term = encodeURIComponent(values[i].value);
          break;
        case 'utm_content':
          utm_content = encodeURIComponent(values[i].value);
          break;
        case 'utm_campaign':
          utm_campaign = encodeURIComponent(values[i].value);
          break;
      }
    }
  }

  // Extract # fragment from URL if it exists.
  if (website.indexOf('#') !== -1) {
    fragment = website.substring(website.indexOf('#'));
    website = website.substring(0, website.indexOf('#'));
  }

  // If input url has the form http://www.google.com, add a "/".
  // Don't add a "/" if url already has a "/" ignoring the http(s)://
  // Don't add a "/" if url has a "?" in it.
  if (website.indexOf('/', 9) === -1 && website.indexOf('?') === -1) {
    website += '/';
  }

  // Add ? or & to website URL.
  if (website.indexOf('?') === -1) {
    website += '?';
  } else {
    website += '&';
  }

  // Add utm_source & utm_medium.
  website += 'utm_source=' + utm_source + '&utm_medium=' + utm_medium;

  // Add utm_term and utm_content if they are not empty.
  if (utm_term != '') {
    website += '&utm_term=' + utm_term;
  }
  if (utm_content != '') {
    website += '&utm_content=' + utm_content;
  }

  // Add utm_campaign.
  website += '&utm_campaign=' + utm_campaign;

  // Add fragment to website if it exists.
  if (fragment) {
    website += fragment;
  }

  // Return the result.
  return website;
};

