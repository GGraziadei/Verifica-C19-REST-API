Example request

Java Unirest\
<code>
Unirest.setTimeouts(0, 0);
HttpResponse<String> response = Unirest.post("http://127.0.0.1:8000/")
  .multiPartContent()
  .field("qrCodeStr", "")
  .asString();
 </code>
  
C libcurl\
<code>
CURL *curl;
CURLcode res;
curl = curl_easy_init();
if(curl) {
  curl_easy_setopt(curl, CURLOPT_CUSTOMREQUEST, "POST");
  curl_easy_setopt(curl, CURLOPT_URL, "http://127.0.0.1:8000/");
  curl_easy_setopt(curl, CURLOPT_FOLLOWLOCATION, 1L);
  curl_easy_setopt(curl, CURLOPT_DEFAULT_PROTOCOL, "https");
  struct curl_slist *headers = NULL;
  curl_easy_setopt(curl, CURLOPT_HTTPHEADER, headers);
  curl_mime *mime;
  curl_mimepart *part;
  mime = curl_mime_init(curl);
  part = curl_mime_addpart(mime);
  curl_mime_name(part, "qrCodeStr");
  curl_mime_data(part, "", CURL_ZERO_TERMINATED);
  curl_easy_setopt(curl, CURLOPT_MIMEPOST, mime);
  res = curl_easy_perform(curl);
  curl_mime_free(mime);
}
curl_easy_cleanup(curl);
 </code>
  
PHP curl
<code>
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://127.0.0.1:8000/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('qrCodeStr' => ''),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
 </code>
  
  
