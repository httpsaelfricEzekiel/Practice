function Notes() {

    const [notes, setNotes] = React.useState([]);
    function handleInputChange(e) {
        setNotes((e) => e.target.value);
    }

    const handleAddNote = () => {
        if(notes.trim()){
            setNotes((note_state) => ({
                notes: [...note_state.notes, note_state.newNote],
                newNote: ""
            }));
        }
    }

    const handleClearNotes = () => {
        setNotes([]);
    }

    const handleShowAllNotes = () => {
        alert(`${notes}`);
    }

    return (
        <div>
            <h1>Stick Notes</h1>
            <input type="text" onChange={handleInputChange} value={notes}/>
            <button onClick={handleAddNote}>Add Notes</button>
            <button onClick={handleClearNotes}>Clear Notes</button>
            <button onClick={handleShowAllNotes}>Show all Notes</button>
            <ul>
                {notes.map((note, index) => (
                    <li key={index}>
                        {note}
                    </li>
                ))}
            </ul>
        </div>
    )

}
const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(<Notes/>);