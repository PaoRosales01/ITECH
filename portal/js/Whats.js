$(function WhatsappOpen() {
    $('#WAButton').floatingWhatsApp({
      phone: `+52${whatsapp}`, //WhatsApp Business phone number International format-
      //Get it with Toky at https://toky.co/en/features/whatsapp.
      headerTitle: '¡Envíanos un mensaje!', //Popup Title
      popupMessage: '¡Hola!, Gracias por confiar en nosotros. ¿En qué te podemos ayudar?', //Popup Message
      showPopup: true, //Enables popup display
      buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
      //headerColor: 'crimson', //Custom header color
      //backgroundColor: 'crimson', //Custom background button color
      position: "right"    
    });
  });