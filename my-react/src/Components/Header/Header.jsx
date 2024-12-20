import "./header.css"
import logo from "./logo.png"
export default function Header() {
    return (
        <div className="cont">
            <img src={logo} alt="" className="logo"/>
            <h2 className="Header_h2">Feedback</h2>
        </div>
    );
}
