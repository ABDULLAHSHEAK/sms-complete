
    function createCalendar(year, month) {
      const currentDate = new Date();
      const currentYear = currentDate.getFullYear();
      const currentMonth = currentDate.getMonth() + 1; // Month is 0-indexed

      const monthNames = [
        'January', 'February', 'March', 'April', 'May', 'June', 'July',
        'August', 'September', 'October', 'November', 'December'
      ];

      const dayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

      const date = new Date(year, month - 1); // Month is 0-indexed
      const daysInMonth = new Date(year, month, 0).getDate();
      const firstDayIndex = date.getDay();

      const calendarTable = document.getElementById('calendarBody');
      calendarTable.innerHTML = '';

      const dayNamesRow = document.getElementById('dayNamesRow');
      dayNamesRow.innerHTML = '';
      for (let i = 0; i < 7; i++) {
        const th = document.createElement('th');
        th.textContent = dayNames[i];
        dayNamesRow.appendChild(th);
      }

      let day = 1;

      // Create rows and cells for days
      for (let i = 0; i < 6; i++) {
        const row = document.createElement('tr');

        for (let j = 0; j < 7; j++) {
          const cell = document.createElement('td');
          if (i === 0 && j < firstDayIndex) {
            // Fill empty cells before the start of the month
            const textNode = document.createTextNode('');
            cell.appendChild(textNode);
          } else if (day > daysInMonth) {
            break;
          } else {
            const textNode = document.createElement('span');
            textNode.textContent = day;
            cell.appendChild(textNode);
            if (year === currentYear && month === currentMonth && day === currentDate.getDate()) {
              cell.classList.add('highlight-today');
            }

            // Apply background colors to the dates
            switch (day % 7) {
              case 1:
                cell.classList.add('bg-primary');
                break;
              case 2:
                cell.classList.add('bg-secondary');
                break;
              case 3:
                cell.classList.add('bg-success');
                break;
              case 4:
                cell.classList.add('bg-danger');
                break;
              case 5:
                cell.classList.add('bg-warning');
                break;
              case 6:
                cell.classList.add('bg-info');
                break;
              case 0:
                cell.classList.add('bg-dark');
                break;
              default:
                cell.classList.add('bg-light');
            }

            day++;
          }
          row.appendChild(cell);
        }
        calendarTable.appendChild(row);
      }
    }

    // Usage:
    const currentDate = new Date();
    const currentYear = currentDate.getFullYear();
    const currentMonth = currentDate.getMonth() + 1; // Month is 0-indexed

    createCalendar(currentYear, currentMonth);
