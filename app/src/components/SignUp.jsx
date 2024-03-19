import React from 'react';

const Register = () => {
  return (
    <div>
      <h1>Register New Student</h1>
      <form>
        <div>
          <input type="text" placeholder="Student Name" />
        </div>
        <div>
          <input type="text" placeholder="Date of Birth" />
        </div>
        <div>
          <input type="text" placeholder="Department" />
        </div>
        <div>
          <input type="text" placeholder="Batch" />
        </div>
        <div>
          <input type="text" placeholder="Email" />
        </div>
        <div>
          <input type="text" placeholder="Phone Number" />
        </div>
        <div>
          <input type="password" placeholder="Password" />
        </div>
        <button type="submit">Register</button>
      </form>
    </div>
  );
}

export default Register;