<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.6.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.6.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDKkGbcb3mu4A9rAnJ4Os889r_IPurfWz4",
    authDomain: "codemantors.firebaseapp.com",
    projectId: "codemantors",
    storageBucket: "codemantors.appspot.com",
    messagingSenderId: "205214544314",
    appId: "1:205214544314:web:59f6e3b085e9ba8c26ad83",
    measurementId: "G-CL39Z74W9X"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>