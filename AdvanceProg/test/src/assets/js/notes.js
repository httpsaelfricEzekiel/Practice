import React, {useState} from 'react';

function Notes() {
    const [notes, setNotes] = useState([]);
    const [inputNotes, setInputNotes] = useState("");
    const currDate = new Date();
    const date = `${currDate.getMonth() + 1}/${currDate.getDate()}/${currDate.getFullYear()}, ${currDate.toLocaleTimeString()}`;

    const newNote = {
        addedNote: inputNotes,
        date: date
    }

    function handleInputChange(e){
        e.preventDefault();
        setInputNotes(e.target.value);
    }

    const handleAddNote = (addedNote) => {  
        if(inputNotes.trim() !== ""){
            setNotes([addedNote, ...notes]);
            setInputNotes("");
            alert("Notes Added!");
        } else {
            alert("No Added Notes")
        }
    }

    const handleClearNotes = () => {
        setNotes([]);
    }

    const handleShowAllNotes = () => {
        if(notes.length){
            alert(notes.map((n) => `${n}\n${newNote.date}\n`).join(""));
        } else {
            alert("Notes is empty!");
        }
    }

    return (
        <div>
            <h1>Stick Notes</h1>
            <input type="text" onChange={handleInputChange} value={inputNotes}/>
            <button onClick={() => handleAddNote(newNote.addedNote)}>Add Notes</button>
            <button onClick={handleClearNotes}>Clear Notes</button>
            <button onClick={handleShowAllNotes}>Show all Notes</button>
            {notes.map((note, index) => (
                <p key={index}>
                    {`${note}`}
                    <br/>
                    {`${date}`}
                </p>
            ))}
        </div>
    )

}
export default Notes;