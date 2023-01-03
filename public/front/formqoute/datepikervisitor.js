  const CONSTANTS = {
  DOM_SELECTORS: {
    datePicker: "",
    datePickerPrevMonth: ".date_picker_prev_months",
    datePickerNextMonth: ".date_picker_next_months",
    datePickerMonthDays: ".date_picker_months_days",
    datePickerMonthDay: ".date_picker_months_day",
    datePickerYear: ".date_pickers_year",
    datePickerMonthName: ".date_picker_month_names",
    datePickerDay: ".days"
  },
  DOM_STRINGS: {
    dataTime: "li[data-time]"
  },
  DUMMY_LI_FOR_EMPTY_DAYS: '<li class="days"></li>',
  DAY_MAP: {
    0: "Sun",
    1: "Mon",
    2: "Tue",
    3: "Wed",
    4: "Thu",
    5: "Fri",
    6: "Sat"
  },
  MONTH_MAP: {
    0: "January",
    1: "February",
    2: "March",
    3: "April",
    4: "May",
    5: "June",
    6: "July",
    7: "August",
    8: "September",
    9: "October",
    10: "November",
    11: "December"
  }
};

const utils = (function () {
  function prefixDOMSelectorsWithPickerSelector(pickerSelector) {
    let DOM_SELECTORS = {};
    for (let selector in CONSTANTS.DOM_SELECTORS) {
      DOM_SELECTORS[
        selector
      ] = `${pickerSelector} ${CONSTANTS.DOM_SELECTORS[selector]}`.trim();
    }
    CONSTANTS.DOM_SELECTORS = DOM_SELECTORS;
  }

  function getDOMElements(DOMSelectors) {
    let DOMElements = {};
    for (let selector in DOMSelectors) {
      if (DOMSelectors.hasOwnProperty(selector)) {
        DOMElements[selector] = document.querySelector(DOMSelectors[selector]);
      }
    }
    return DOMElements;
  }

  function getDatePickerWeekDaysNameMarkUp() {
    return `
        <li>Sun</li>
        <li>Mon</li>
        <li>Tue</li>
        <li>Wed</li>
        <li>Thu</li>
        <li>Fri</li>
        <li>Sat</li>`;
  }

  function getDayMarkup(day = 1, isActive = false, time = null) {
    if (!time) {
      console.trace(`The time provided for getDayMarkup ${time} is invalid`);
    }
    return `
        <li class="days" data-time="${time}">
            <button class="${isActive ? "active" : ""}">${day}</button>
        </li>`;
  }

  function getAllDays() {
    let days = document.querySelectorAll(CONSTANTS.DOM_SELECTORS.datePickerDay);
    return [...(days ?? [])];
  }

  function getDaySuffix(day) {
    switch (day) {
      case 1:
      case 21:
      case 31:
        return "st";
      case 2:
      case 22:
        return "nd";
      case 3:
      case 23:
        return "rd";
      default:
        return "th";
    }
  }

  return {
    prefixDOMSelectorsWithPickerSelector,
    getDOMElements,
    getDatePickerWeekDaysNameMarkUp,
    getDayMarkup,
    getAllDays,
    getDaySuffix
  };
})();

const model = (function () {
  const data = {
    currentDate: new Date(),
    selectedDate: new Date()
  };

  function setCurrentDate(newDate) {
    data.currentDate = newDate;
  }

  function setSelectedDate(newDate) {
    data.selectedDate = newDate;
  }

  function getCurrentDate() {
    return data.currentDate;
  }

  function getSelectedDate() {
    return data.selectedDate;
  }

  return { setCurrentDate, setSelectedDate, getCurrentDate, getSelectedDate };
})();

const view = (function (model, utils) {
  function removeDays() {
    const allDays = utils.getAllDays();
    allDays.forEach((day) => day.remove());
  }

  function fillEmptyDays(count) {
    const DOMElements = utils.getDOMElements(CONSTANTS.DOM_SELECTORS);
    for (let i = 0; i < count; i++) {
      DOMElements.datePickerMonthDays.insertAdjacentHTML(
        "beforeend",
        CONSTANTS.DUMMY_LI_FOR_EMPTY_DAYS
      );
    }
  }

  function fillDay(day, isActive = false, time) {
    const dayMarkUp = utils.getDayMarkup(day, isActive, time);
    const DOMElements = utils.getDOMElements(CONSTANTS.DOM_SELECTORS);
    DOMElements.datePickerMonthDays.insertAdjacentHTML("beforeend", dayMarkUp);
  }

  function fillCurrentMonth(string) {
    const DOMElements = utils.getDOMElements(CONSTANTS.DOM_SELECTORS);
    DOMElements.datePickerMonthName.textContent = string;
  }

  function fillSelectedDate(month, date, day, year) {
    setdeparuredate(month, date, day, year);
    const DOMElements = utils.getDOMElements(CONSTANTS.DOM_SELECTORS);
    DOMElements.datePickerMonthDay.innerHTML = `${
      CONSTANTS.MONTH_MAP[month]
    } ${date}<sup>${utils.getDaySuffix(date)}</sup>, ${CONSTANTS.DAY_MAP[day]}`;
    DOMElements.datePickerYear.textContent = year;
  }

  return {
    removeDays,
    fillEmptyDays,
    fillDay,
    fillCurrentMonth,
    fillSelectedDate
  };
})(model, utils);

const controller = (function (model, view, utils) {
  let DOMElements = null;
  function init(pickerSelector = "", selectedDate = new Date()) {
    utils.prefixDOMSelectorsWithPickerSelector(pickerSelector);
    DOMElements = utils.getDOMElements(CONSTANTS.DOM_SELECTORS);
    if (!DOMElements.datePicker) {
      throw new Error(
        `Date Picker with selector ${pickerSelector} not found in the document`
      );
    }
    DOMElements.datePickerNextMonth.addEventListener(
      "click",
      handleNextMonthClick
    );
    DOMElements.datePickerPrevMonth.addEventListener(
      "click",
      handlePrevMonthClick
    );
    DOMElements.datePickerMonthDays.addEventListener("click", handleSelectDate);
    if (selectedDate.constructor !== Date) {
      throw new Error(`The initial date ${selectedDate} is not a Date Object`);
    }
    let clonedSelectedDate = new Date(selectedDate.getTime());
    let clonedCurrentDate = new Date(selectedDate.getTime());
    model.setSelectedDate(clonedSelectedDate);
    model.setCurrentDate(clonedCurrentDate);
    render(selectedDate);
  }

  function handleSelectDate(event) {
    const time = event.target.closest(CONSTANTS.DOM_STRINGS.dataTime)?.dataset
      .time;
    if (!time) return;
    model.setSelectedDate(new Date(Number(time)));
    model.setCurrentDate(new Date(Number(time)));
    render();
  }

  function handleNextMonthClick() {
    render();
  }

  function handlePrevMonthClick() {
    let currentDate = new Date(model.getCurrentDate().getTime());
    currentDate.setMonth(currentDate.getMonth() - 2);
    model.setCurrentDate(currentDate);
    render();
  }

  function render(selectedDate = null) {
    updateSelectedDateMarkUp();
    view.removeDays();
    let currentDate = new Date(
      selectedDate?.getTime() ?? model.getCurrentDate().getTime()
    );
    let selected = model.getSelectedDate();
    let selectedDay = selected.getDate();
    let selectedMonth = selected.getMonth();
    let selectedYear = selected.getFullYear();
    currentDate.setDate(1);
    let renderingMonth = currentDate.getMonth();
    view.fillEmptyDays(currentDate.getDay());
    view.fillCurrentMonth(
      `${CONSTANTS.MONTH_MAP[renderingMonth]} - ${currentDate.getFullYear()}`
    );
    while (currentDate.getMonth() === renderingMonth) {
      let currentMonth = currentDate.getMonth();
      let currentDay = currentDate.getDate();
      let currentYear = currentDate.getFullYear();
      let currentStringDate = `${currentDay}/${
        currentMonth + 1
      }/${currentYear}`;
      let selectedStringDate = `${selectedDay}/${
        selectedMonth + 1
      }/${selectedYear}`;
      view.fillDay(
        currentDate.getDate(),
        selectedStringDate === currentStringDate,
        currentDate.getTime()
      );
      currentDate.setDate(currentDay + 1);
    }
    model.setCurrentDate(currentDate);
  }

  function updateSelectedDateMarkUp() {
    const currentDate = new Date(model.getSelectedDate().getTime());
    view.fillSelectedDate(
      currentDate.getMonth(),
      currentDate.getDate(),
      currentDate.getDay(),
      currentDate.getFullYear()
    );
  }

  return { init };
})(model, view, utils);

controller.init("#date_picker_2");