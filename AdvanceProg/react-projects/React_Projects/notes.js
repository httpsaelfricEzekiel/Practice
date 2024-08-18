function Notes() {
    const [notes, setNotes] = React.useState([]);
    
    const currDate = new Date();
    const date = `${currDate.getMonth() + 1}/${currDate.getDate()}/${currDate.getFullYear()} ${currDate.getMinutes() - 1}`;

    function handleInputChange(e){
        setNotes([e.target.value]);
    }
    const handleAddNote = () => {   
        setNotes([...notes, notes]);
    }

    const handleClearNotes = () => {
        setNotes([]);
    }

    const handleShowAllNotes = () => {
        alert(`\n${notes}\n${date}`);
    }

    return (
        <div>
            <h1>Stick Notes</h1>
            <input type="text" onChange={handleInputChange} value={notes}/>
            <button onClick={handleAddNote}>Add Notes</button>
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
const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(<Notes/>);