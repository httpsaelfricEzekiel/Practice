function Notes() {
    const [notes, setNotes] = React.useState([]);
    
    const newNote = {
        addedNote: notes
    }
    
    const currDate = new Date();
    const date = `${currDate.getMonth() + 1}/${currDate.getDate()}/${currDate.getFullYear()}, ${currDate.toLocaleTimeString()}`;

    function handleInputChange(e){
        e.preventDefault();
        setNotes([e.target.value]);
    }

    const handleAddNote = (addedNote) => {   
        setNotes([...notes, addedNote]);
    }

    const handleClearNotes = () => {
        setNotes([]);
    }

    const handleShowAllNotes = () => {
        alert(`\n${notes}\n${date}\n`);
    }

    return (
        <div>
            <h1>Stick Notes</h1>
            <input type="text" onChange={handleInputChange} value={notes}/>
            <button onClick={() => handleAddNote(newNote.addedNote)}>Add Notes</button>
            <button onClick={handleClearNotes}>Clear Notes</button>
            <button onClick={handleShowAllNotes}>Show all Notes</button>
            {notes.map((note, index) => (
                <p key={index}>
                    {`${note}`}
                    <br/>
                    <br/>
                    {`${date}`}
                </p>
            ))}
        </div>
    )

}
const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(<Notes/>);