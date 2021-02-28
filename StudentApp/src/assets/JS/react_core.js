import { useState, useEffect } from 'react';
const [success, setSuccess] = useState(false);
useEffect(() => {
    if (window.location.search.includes('success=true')) {
        setSuccess(true);
    }
}, []);