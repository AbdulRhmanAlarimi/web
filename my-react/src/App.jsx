import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import Feedback from "./Components/Feedback/Feedback.jsx"
import MyHeader from "./Components/Header/Header.jsx"
import Footer from './Components/Footer/Footer.jsx';

function App() {
  return (
    <>
      <MyHeader />
      <Feedback />
      <Footer />
    </>
  );
}

export default App
