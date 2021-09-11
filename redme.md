Example request

<code>
Java Unirest
Unirest.setTimeouts(0, 0);
HttpResponse<String> response = Unirest.post("http://127.0.0.1:8000/")
  .multiPartContent()
  .field("qrCodeStr", "")
  .asString();
  </code>
