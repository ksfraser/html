/**
 * Report Viewer Modal Handler
 * 
 * Handles report viewing in modal dialogs with AJAX data fetching.
 * Uses Modal SRP classes structure (modal-overlay, modal-content).
 */

function viewReport(id) {
    // Create modal using DOM API (structure matches ModalBuilder output)
    const modal = document.createElement('div');
    modal.id = 'report-modal';
    modal.className = 'modal-overlay';
    
    const content = document.createElement('div');
    content.className = 'modal-content';
    
    // Initial loading state
    const heading = document.createElement('h2');
    heading.textContent = 'Report #' + id;
    content.appendChild(heading);
    
    const loadingMsg = document.createElement('p');
    loadingMsg.textContent = 'Loading report details...';
    content.appendChild(loadingMsg);
    
    const closeBtn = document.createElement('button');
    closeBtn.textContent = 'Close';
    closeBtn.className = 'modal-close-btn';
    closeBtn.onclick = closeReportModal;
    content.appendChild(closeBtn);
    
    modal.appendChild(content);
    document.body.appendChild(modal);
    
    // Fetch report details via AJAX
    const controller = window.location.pathname.split('?')[0];
    fetch(controller + '?action=report_details&id=' + id)
        .then(response => response.json())
        .then(data => {
            // Clear content and rebuild
            content.innerHTML = '';
            
            const newHeading = document.createElement('h2');
            newHeading.textContent = 'Report #' + id;
            content.appendChild(newHeading);
            
            // Build table
            const table = document.createElement('table');
            table.border = '1';
            table.cellPadding = '8';
            table.style.width = '100%';
            table.style.borderCollapse = 'collapse';
            
            const headerRow = document.createElement('tr');
            const th1 = document.createElement('th');
            th1.textContent = 'Property';
            const th2 = document.createElement('th');
            th2.textContent = 'Value';
            headerRow.appendChild(th1);
            headerRow.appendChild(th2);
            table.appendChild(headerRow);
            
            for (const [key, value] of Object.entries(data)) {
                const row = document.createElement('tr');
                const keyCell = document.createElement('td');
                const keyStrong = document.createElement('strong');
                keyStrong.textContent = key;
                keyCell.appendChild(keyStrong);
                const valueCell = document.createElement('td');
                valueCell.textContent = value;
                row.appendChild(keyCell);
                row.appendChild(valueCell);
                table.appendChild(row);
            }
            
            content.appendChild(table);
            
            const newCloseBtn = document.createElement('button');
            newCloseBtn.textContent = 'Close';
            newCloseBtn.className = 'modal-close-btn';
            newCloseBtn.onclick = closeReportModal;
            content.appendChild(newCloseBtn);
        })
        .catch(error => {
            content.innerHTML = '';
            
            const errorHeading = document.createElement('h2');
            errorHeading.textContent = 'Report #' + id;
            content.appendChild(errorHeading);
            
            const errorMsg = document.createElement('p');
            errorMsg.style.color = 'red';
            errorMsg.textContent = 'Error loading report: ' + error.message;
            content.appendChild(errorMsg);
            
            const errorCloseBtn = document.createElement('button');
            errorCloseBtn.textContent = 'Close';
            errorCloseBtn.className = 'modal-close-btn';
            errorCloseBtn.onclick = closeReportModal;
            content.appendChild(errorCloseBtn);
        });
}

function closeReportModal() {
    const modal = document.getElementById('report-modal');
    if (modal) {
        modal.remove();
    }
}
