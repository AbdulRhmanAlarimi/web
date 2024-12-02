import React, { useState } from "react";
import "./Feedback.css";

export default function Feedback() {
  const [formData, setFormData] = useState({
    Name: "",
    Username: "",
    Email: "",
    "customer Question": "",
    star: [],
  });

  const [errors, setErrors] = useState({});

  const handleChange = (e) => {
    const { name, value, type, checked } = e.target;
    if (type === "checkbox") {
      setFormData((prev) => ({
        ...prev,
        star: checked
          ? [...prev.star, value]
          : prev.star.filter((s) => s !== value),
      }));
    } else {
      setFormData((prev) => ({
        ...prev,
        [name]: value,
      }));
    }
  };

  const validate = () => {
    const newErrors = {};
    if (!formData.Name) newErrors.Name = "Name is required.";
    if (!formData.Username) newErrors.Username = "Username is required.";
    if (!formData.Email || !/\S+@\S+\.\S+/.test(formData.Email))
      newErrors.Email = "A valid email is required.";
    if (!formData["customer Question"])
      newErrors["customer Question"] = "Comment is required.";
    if (formData.star.length === 0)
      newErrors.star = "Please select at least one star.";
    setErrors(newErrors);
    return Object.keys(newErrors).length === 0;
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    if (validate()) {
      alert("Form submitted successfully!");
    }
  };

  return (
    <div className="Feedback_cont">
      <h2>Feadback Form</h2>
      <form onSubmit={handleSubmit} className="Feedback_form">
        <h6>Name:</h6>
        <input
          type="text"
          name="Name"
          value={formData.Name}
          id="name"
          onChange={handleChange}
        />
        {errors.Name && <p className="error">{errors.Name}</p>}

        <h6>Username:</h6>
        <input
          type="text"
          name="Username"
          value={formData.Username}
          id="username"
          onChange={handleChange}
        />
        {errors.Username && <p className="error">{errors.Username}</p>}

        <h6>Upload an image:</h6>
        <input
          type="file"
          id="imageUpload"
          name="imageUpload"
          accept="image/*"
        />

        <h6>Email:</h6>
        <input
          type="text"
          name="Email"
          value={formData.Email}
          id="Email"
          onChange={handleChange}
        />
        {errors.Email && <p className="error">{errors.Email}</p>}

        <h6>Review by select number of stars:</h6>
        <label>
          <input
            type="checkbox"
            name="star"
            value="1"
            onChange={handleChange}
          />{" "}
          One
        </label>
        <label>
          <input
            type="checkbox"
            name="star"
            value="2"
            onChange={handleChange}
          />{" "}
          Two
        </label>
        <label>
          <input
            type="checkbox"
            name="star"
            value="3"
            onChange={handleChange}
          />{" "}
          Three
        </label>
        <label>
          <input
            type="checkbox"
            name="star"
            value="4"
            onChange={handleChange}
          />{" "}
          Four
        </label>
        <label>
          <input
            type="checkbox"
            name="star"
            value="5"
            onChange={handleChange}
          />{" "}
          Five
        </label>
        {errors.star && <p className="error">{errors.star}</p>}

        <h6>Comment:</h6>
        <textarea
          name="customer Question"
          id="comment"
          rows="3"
          cols="50"
          value={formData["customer Question"]}
          onChange={handleChange}
        >
          write your comment her
        </textarea>
        {errors["customer Question"] && (
          <p className="error">{errors["customer Question"]}</p>
        )}

        <input type="submit" value="Submit" />
        <input
          type="reset"
          value="Clear"
          onClick={() =>
            setFormData({
              Name: "",
              Username: "",
              Email: "",
              "customer Question": "",
              star: [],
            })
          }
        />
        <br />
        <br />
      </form>
    </div>
  );
}
