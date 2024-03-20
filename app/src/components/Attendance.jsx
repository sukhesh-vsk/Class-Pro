import React from "react";

const Attendance = () => {
    const _studData = {
                        "name":"Sukhesh Kumar V",
                        "rollNo":"727822TUIT238",
                        "course":"B. Tech IT",
                        "attendance":[{"sno":1,"courseCode":"CS1001","subjectName":"Data Structures","noOfHours":40,"hoursPresent":30,"hoursAbsent":10,"percentage":75},
                                    {"sno":2,"courseCode":"CS1002","subjectName":"Networking","noOfHours":40,"hoursPresent":30,"hoursAbsent":10,"percentage":75},
                                    {"sno":3,"courseCode":"CS1003","subjectName":"Operating Systems","noOfHours":40,"hoursPresent":30,"hoursAbsent":10,"percentage":75},
                                    {"sno":4,"courseCode":"CS1004","subjectName":"Algorithm","noOfHours":40,"hoursPresent":30,"hoursAbsent":10,"percentage":75},
                                    {"sno":5,"courseCode":"CS1005","subjectName":"Database Management Systems","noOfHours":40,"hoursPresent":30,"hoursAbsent":10,"percentage":75},
                                    {"sno":6,"courseCode":"CS1006","subjectName":"Software Engineering","noOfHours":40,"hoursPresent":30,"hoursAbsent":10,"percentage":75},
                                    {"sno":7,"courseCode":"CS1007","subjectName":"Web Technologies","noOfHours":40,"hoursPresent":30,"hoursAbsent":10,"percentage":75},
                                    {"sno":8,"courseCode":"CS1008","subjectName":"Computer Graphics","noOfHours":40,"hoursPresent":30,"hoursAbsent":10,"percentage":75},]
                    };
  return (
    <div>
      <div className="student__detail">
        <h3>{_studData["name"]}</h3>
        <h5>{_studData["rollNo"]}</h5>
        <h5>{_studData["course"]}</h5>
      </div>
      <h1>Attendance</h1>
      <div className="attendance__section">
        <table>
            <thead>
                <tr>
                    <td><h3>S No</h3></td>
                    <td><h3>Course Code</h3></td>
                    <td><h3>Subject Name</h3></td>
                    <td><h3>No. of Hours</h3></td>
                    <td><h3>Hours Present</h3></td>
                    <td><h3>Hours Absent</h3></td>
                    <td><h3>Percentage</h3></td>
                </tr>
            </thead>
            <tbody>
              {_studData["attendance"].map((data, index) => {
                return (
                  <tr key={index}>
                    <td>{data["sno"]}</td>
                    <td>{data["courseCode"]}</td>
                    <td>{data["subjectName"]}</td>
                    <td>{data["noOfHours"]}</td>
                    <td>{data["hoursPresent"]}</td>
                    <td>{data["hoursAbsent"]}</td>
                    <td>{data["percentage"]}</td>
                  </tr>
                );
              })}
            </tbody>
        </table>
      </div>
    </div>
  );
}

export default Attendance;