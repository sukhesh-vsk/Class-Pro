import React from "react";

const Attendance = () => {
    const _studData = {
                        "name":"Sukhesh Kumar V",
                        "rollNo":"727822TUIT238",
                        "course":"B. Tech IT",
                        "attendance":[{"sno":1,"courseCode":"CS1001","subjectName":"Data Structures","noOfHours":40,"hoursPresent":30,"hoursAbsent":10,"percentage":75},
                                    {"sno":2,"courseCode":"CS1002","subjectName":"Algorithms","noOfHours":40,"hoursPresent":30,"hoursAbsent":10,"percentage":75},
                                    {"sno":3,"courseCode":"CS1003","subjectName":"Operating Systems","noOfHours":40,"hoursPresent":30,"hoursAbsent":10,"percentage":75},
                                    {"sno":4,"courseCode":"CS1004","subjectName":"Computer Networks","noOfHours":40,"hoursPresent":30,"hoursAbsent":10,"percentage":75},
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
                    <td><h5>S No</h5></td>
                    <td><h5>Course Code</h5></td>
                    <td><h5>Subject Name</h5></td>
                    <td><h5>No. of Hours</h5></td>
                    <td><h5>Hours Present</h5></td>
                    <td><h5>Hours Absent</h5></td>
                    <td><h5>Percentage</h5></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><h5>S No</h5></td>
                <td><h5>Course Code</h5></td>
                <td><h5>Subject Name</h5></td>
                <td><h5>No. of Hours</h5></td>
                <td><h5>Hours Present</h5></td>
                <td><h5>Hours Absent</h5></td>
                <td><h5>Percentage</h5></td>
            </tbody>
        </table>
      </div>
    </div>
  );
}

export default Attendance;